 $(document).ready(function(){
    $('.content-item').click(function(){
        var ytID = $(this).attr('data-content');
            vidTitle = $(this).attr('data-title');

        $('.modal-window').addClass('open');
        $('body').addClass('modal-open');
        $('.video-container').html('<iframe width="560" height="315" src="https://www.youtube.com/embed/'+ytID+'" title="'+vidTitle+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
    });

    $('.close-btn').click(function(){
        $('.video-container').html('');
        $('.modal-window').removeClass('open');
        $('body').removeClass('modal-open');
    });

 });