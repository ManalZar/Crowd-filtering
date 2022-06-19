$(function () {
    $(".rateyol").rateYo({
rating: 2,
fullStar: true,
ratedFill: "#E74C3C",
maxValue: 2,
numStars:2
}).on("rateyol.change", function (e, data) {
        var rating = data.rating;
        $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
        $(this).parent().find('.result').text('rating :'+ rating);
        $(this).parent().find('input[name=rating1_bol]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating2_bol]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating3_bol]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating4_bol]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating5_bol]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating6_bol]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating7_bol]').val(rating); //add rating value to input field
        $(this).parent().find('input[name=rating8_bol]').val(rating); //add rating value to input field
    });
});