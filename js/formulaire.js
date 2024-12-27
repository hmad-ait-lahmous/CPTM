// Formulaire Select Script start
document.addEventListener('DOMContentLoaded', function () {
    var selectElement = document.getElementById("type");

    selectElement.addEventListener("change", function () {
        var parentElement = selectElement.parentElement;
        var otherInput = parentElement.querySelector('input[name="OtherType"]');

        if (selectElement.value === "other") {
            // Create input field if not already created
            if (!otherInput) {
                var inputField = document.createElement("input");
                inputField.type = "text";
                inputField.name = "OtherType";
                inputField.placeholder = "Enter other type";
                inputField.required = true;
                parentElement.insertBefore(inputField, selectElement.nextSibling);
            }
        } else {
            // Remove input field if it exists
            if (otherInput) {
                otherInput.remove();
            }
        }
    });
});
// Formulaire Select Script End