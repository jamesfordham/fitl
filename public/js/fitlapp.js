/**
 * Created by Valued Customer on 18/07/2017.
 */

$('form.delete-object').submit(function(e) {
    var deleteConfirmed = confirm('Are you sure you want to delete this?! You will not be able to get this record back...');
    //True (clicks OK)
    return deleteConfirmed;
    //False (click Cancel) - halted
});

//Toggle Player edit forms when edit button selected
$('.edit-object').click(function(e) {
    var $playerItem = $(this).closest('li');
    var $playerForm = $playerItem.find('form.edit-object-form');
    $playerForm.toggleClass('hide');
});