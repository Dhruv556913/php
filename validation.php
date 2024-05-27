<div class="form-group">
                    <input type="text" class="form-control rounded-0 p-3" placeholder="Name" name="name" onKeyPress="return onlyAlphabets(event,this);">
                </div>
function onlyAlphabets(e, t) {
                try {
                    if (window.event) {
                        var charCode = window.event.keyCode;
                    } else if (e) {
                        var charCode = e.which;
                    } else {
                        return true;
                    }
                    if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32))
                        return true;
                    else
                        return false;

                } catch (err) {
                    alert(err.Description);

                }
            }
