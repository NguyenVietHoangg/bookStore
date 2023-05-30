var userApi = "http://localhost:8080/admin/user/list-api";
const usersInfo = 0;
fetch(userApi)
    .then((res) => res.json())
    .then((data) => {
        Validate("#form-add-user");

        function Validate(form) {
            var formValidate = document.querySelector(form);
            var totalRule = {};

            var fncRule = {
                required: function (values) {
                    return values ? undefined : "Vui Lòng Nhập Trường Này";
                },

                email: function (values) {
                    return values.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g)
                        ? undefined
                        : "Trường Này Không Phải Là Email";
                },
                duplicateEmail: function (values) {
                    var status = false;

                    data.map((e) => {
                        if (e["email"] === values) {
                            status = true;
                        }
                        return status;
                    });
                    return status ? "Email đã được sử dụng" : undefined;
                },

                min: function (min) {
                    return function (values) {
                        return values.length >= min
                            ? undefined
                            : `Mật Khẩu Tối Thiểu Phải Trên ${min} Kí Tự`;
                    };
                },
                max: function (max) {
                    return function (values) {
                        return values.length <= max
                            ? undefined
                            : `Mật Khẩu Tối Đa Phải Dưới ${max} Kí Tự`;
                    };
                },
                duplicate: function (values) {
                    return values === document.querySelector("#password").value
                        ? undefined
                        : "Mật Khẩu Không Trùng Khớp";
                },
            };

            function getParent(elementInput) {
                if (elementInput.matches(".form-group")) {
                    return elementInput;
                } else {
                    return getParent(elementInput.parentElement);
                }
            }

            function onInput(elementInput, parentInput, elementMessage) {
                elementInput.oninput = function () {
                    parentInput.classList.remove("invalid");
                    elementMessage.innerText = "";
                };
            }
            function blurInput(elementInput) {
                var ruleInput = totalRule[elementInput.name];
                var parentInput = getParent(elementInput);
                var elementMessage = parentInput.querySelector(".form-message");
                var message;

                elementInput.onblur = function () {
                    for (let i = 0; i < ruleInput.length; ++i) {
                        message = ruleInput[i](this.value);

                        if (message) {
                            parentInput.classList.add("invalid");
                            elementMessage.innerText = message;
                            break;
                        } else {
                            parentInput.classList.remove("invalid");
                            elementMessage.innerText = "";
                        }
                    }
                };
                onInput(elementInput, parentInput, elementMessage);
            }

            function setTotalRule(inputs) {
                inputs.forEach((elementInput) => {
                    var rules = elementInput.getAttribute("rule");
                    var rule = rules.split("|");

                    rule.forEach((elementRule) => {
                        var fncR = fncRule[elementRule];

                        if (elementRule.includes(":")) {
                            var rule1 = elementRule.split(":");

                            elementRule = rule1[0];
                            fncR = fncRule[elementRule](rule1[1]);
                        }

                        if (Array.isArray(totalRule[elementInput.name])) {
                            totalRule[elementInput.name].push(fncR);
                        } else {
                            totalRule[elementInput.name] = [fncR];
                        }
                    });

                    blurInput(elementInput);
                });
            }

            function onsubmit(formValidate, inputs) {
                formValidate.onsubmit = function (e) {
                    var checkSubmit = true;

                    inputs.forEach((element) => {
                        for (
                            let i = 0;
                            i < totalRule[element.name].length;
                            ++i
                        ) {
                            var parentInput = getParent(element);
                            var elementMessage =
                                parentInput.querySelector(".form-message");
                            var mes = totalRule[element.name][i](element.value);

                            if (mes) {
                                parentInput.classList.add("invalid");
                                elementMessage.innerText = mes;
                                checkSubmit = false;
                                break;
                            } else {
                                parentInput.classList.remove("invalid");
                                elementMessage.innerText = "";
                            }
                        }
                        account[element.name] = element.value;
                    });

                    if (checkSubmit) {
                        console.log(account);
                        alert("Đăng Kí Thành Công");
                    } else {
                        e.preventDefault();
                        alert("Đăng Kí Thất Bại");
                    }
                };
            }

            if (formValidate) {
                var inputs = formValidate.querySelectorAll("[name][rule]");
                var account = {};

                setTotalRule(inputs);
                onsubmit(formValidate, inputs);
            }
        }
    });
