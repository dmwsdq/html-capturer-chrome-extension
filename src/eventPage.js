    chrome.runtime.onMessage.addListener(
        function(request, sender, sendResponse) {
            var html = request.html;
            var url = 'http://localhost/capturer/recv.php';
            var data = {html:html};
            $.post(url, data, function(result) {
                sendResponse({result: result});                    
            });
    });
