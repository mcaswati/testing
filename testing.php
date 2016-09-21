<ul id="menu" class="menu no-bullet" >
    <button><a data-page="information" href="#"><h3> RECENT PICTURE AND VIDEOS </h3> </a></button>
    <button><a data-page="portfolio" href="#"><h3> PHOTO ALBUMS </h3> </a></button> 
</ul>

<div id="pages">
    <div id="information" class="page" data-page="information">
        <div class="row">
            <div class="columns large-6">
                <h1> About Me </h1>
                <p> Lorem ipsum information </p>
            </div>
        </div>
    </div>
    <div id="portfolio" class="page hide" data-page="portfolio">
        <div class="row">
            <div class="columns large-6">
                <h1> Portfolio </h1>
                <p> Lorem ipsum portfolio </p>
            </div>
        </div>
    </div>
    <div id="blog" class="page hide" data-page="blog">
        <div class="row">
            <div class="columns large-6">
                <h1> Blog </h1>
                <p> Lorem ipsum blog </p>
            </div>
        </div>
    </div>
    <div id="contact" class="page hide" data-page="contact">
        <div class="row">
            <div class="columns large-6">
                <h1> Contact Me </h1>
                <p> Lorem ipsum contact </p>
            </div>
        </div>
    </div>
</div>
<style>
.hide {
    display: none;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#menu button a").on('click', function(e) {
        e.preventDefault()
        var page = $(this).data('page');
        $("#pages .page:not('.hide')").stop().fadeOut('fast', function() {
            $(this).addClass('hide');
            $('#pages .page[data-page="'+page+'"]').fadeIn('slow').removeClass('hide');
        });
    });
});
</script>