<!DOCTYPE html>
<html>
<head>
    <title>Chat Application</title>
    <!-- Add necessary CSS and JS libraries here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="row" style="margin: 20px;">
        <div class="card col-sm-4" style="height: 250px;">
            <div class="card-body">
                <form id="chat-form">
                    <div class="form-group">
                        <input type="text" name="nama_chat" class="form-control" id="name" placeholder="Enter Name...">
                    </div>
                    <div class="form-group" style='margin-top: 10px; margin-bottom: 10px;'>
                        <textarea type='text' name='text_chat' id='chat' rows='4' placeholder='Type Here...'></textarea>
                    </div>
                    <button type='button' class='btn btn-primary'>Send</button>
                </form>
            </div>
        </div>

        <div class= "card col-sm-8" style= "height: 500px;">
            <div class= "card-body">
                <ul div class= "chat-content"></ul div> 
            </div> 
        </div> 
        
    </body> 

    </html>

    <style>
        /* Add custom CSS for chat bubbles */
        .chat-bubble {
            max-width: 70%;
            padding: 10px;
            margin: 5px;
            border-radius: 10px;
            clear: both;
            word-wrap: break-word;
        }
        .incoming-bubble {
            background-color: #e6e6e6;
            float: left;
        }
        .outgoing-bubble {
            background-color: #007bff;
            color: #fff;
            float: right;
        }
    </style>

<script type= 'text/javascript'>
$(document).ready(function(){
    
    getChat();

    $('button').click(function(){
        var values = $('#chat-form').serialize();
        
        $.ajax({
            type: 'post',
            url: 'PostChat.php',
            data: values,
            success : function (response) { getChat(); clearInput(); },
            error : function(jqXHR, textStatus, errorThrown) { console.log(textStatus, errorThrown); }
        });
    });
});

function getChat() {
    $.ajax({
        url: "getChat.php",
        type: "GET",
        error: function(jqXHR, textStatus, errorThrown) { console.log(textStatus, errorThrown); },
        success: function(response) {
            $(".chat-content").html(response);
        }
    });
}

function clearInput() {
    $('input').val('');
    $('textarea').val('');
}

</script>
