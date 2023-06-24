    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<link rel="stylesheet" href="{{url('css/bot.css')}}">


    <div class="bablechat" id="bablechat"><img src="{{url('img/botchat.png')}}" alt=""></div>


    <div class="wrapper" id="contain">
        <div class="title">Chatbot <button onclick="closechat()"> X close</button></div>
        
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Apakah Ada Masalah?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Tanyakan Sesuatu.." required>
                <button id="kirim-btn">Kirim</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#kirim-btn").on("click", kirimpesan );
            $('#data').on('keypress', function(e) {
                if(e.which == 13){
                    kirimpesan();
                }
            })

            $('#bablechat').on("click",function () {
                $('#contain').css('opacity',"1");
                $('#bablechat').css('opacity',"0");
                
            })

        });

        function kirimpesan(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: '/bot',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            };

            function closechat() {
                $('#contain').css('opacity',0)
                $('#bablechat').css('opacity',1)
            }

    </script>