// Function to get query parameters
function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

// Show alert based on the value of 'isAdded'
window.onload = function () {
    const isAdded = getQueryParam('isAdded');
    if (isAdded) {
        if (isAdded === 'true') {
            alert('Nous répondrons à votre proposition dès que possible.');
        } else {
            alert('Échec de l\'ajout de la proposition. Veuillez réessayer.');
        }
    }
};