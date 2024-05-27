<input type="text" onkeyup="enableSubmit()" minlength="10" maxlength="10" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Mobile Number(Input Only Digits)" 
name="mobile" pattern="^(98|63|81|99|75)\d{8}$" required>
    

<script type="text/javascript">
                        var specialKeys = new Array();
                        specialKeys.push(8); //Backspace
                        function IsNumeric(e) {
                            var keyCode = e.which ? e.which : e.keyCode
                            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                            document.getElementById("error").style.display = ret ? "none" : "inline";
                            return ret;
                        }
                    </script>
