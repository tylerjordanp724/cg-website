const $contentItem = $('.content-item');

const getVideoThumbs = () => {
    $contentItem.each(function () {
        const vidThumbSrc = $(this).attr("data-thumb");
        const ytID = $(this).attr('data-content');
        const vidTitle = $(this).attr('data-title');
        
        $(this).html(`
        <div class="content-img img--cover mb-3"><figure><picture><img src="${vidThumbSrc ? vidThumbSrc : `//i.ytimg.com/vi/${ytID}/0.jpg`}"/></picture></figure></div><span class="content-item__title">${vidTitle}</span>`);
    });
}

const showBioModal = () => {
    const $bioModalTrigger = $('.bio-modal-trigger');

    $bioModalTrigger.click(function() {
        $('.modal-window').addClass('open');
        $('body').addClass('modal-open');
    });
}
 
 $(document).ready(function(){
    getVideoThumbs();

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