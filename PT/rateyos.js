$(function () {
    $(".rateyos").rateYo({
rating: 2,
fullStar: true,
ratedFill: "#00FF00",
maxValue: 2,
numStars:2
}).on("rateyos.change", function (e, data) {
        var rating = data.rating;
        $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
        $(this).parent().find('.result').text('rating :'+ rating);
        $(this).parent().find('input[name=rating1_bos]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating2_bos]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating3_bos]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating4_bos]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating5_bos]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating6_bos]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating7_bos]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating8_bos]').val(rating); //add rating value to input field
    });
});