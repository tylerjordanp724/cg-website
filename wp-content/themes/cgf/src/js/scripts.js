const getVideoThumbs = () => {
    $videoPlayer.each(function () {
        const vidThumbSrc = $(this).attr("data-thumb");
        const ytID = $(this).attr('data-id');
        
        $(this).html(`<img class="b-lazy" data-src="${vidThumbSrc ? vidThumbSrc : `//i.ytimg.com/vi/${ytID}/0.jpg`}"/>`).append('<button class="btn btn--play"><span class="sr-only">Play</span></button>');
    });
}
 
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