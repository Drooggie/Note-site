$('.close-icon').on('click',function() {
    $(this).closest('.card-to-close').fadeOut();
})

function transferTodoID(id) {
    document.getElementById("outputTodoID").value = id;
}

function transferToDeleteBuffer(id) {
    document.getElementById('outputDeleteBuffer').value += id;
}
