 $(document).ready(function(){
        $("#postIt").submit(function(){
            $.post($(this).attr('action'), $(this).serialize(), function(data){
                console.log(data.post);
				if(data)
                {
						var html = "<div class='post_note'>" + data.post + "</div>";
						$(".post_note").last().after(html);
                }
                else
                {
                    alert(data.error);
                }
            }, "json");
            return false;
        });
    });