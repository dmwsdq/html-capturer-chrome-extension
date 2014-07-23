function captureHTML() {
    var html = '<html>' + $('html').html() + '</html>';
    chrome.runtime.sendMessage({html: html}, function(response) {
        alert(response.result);
    });
}
captureHTML();

