$('.close-icon').on('click', function () {
    $(this).closest('.card-to-close').fadeOut();
})

function transferTodoID(id) {
    document.getElementById("outputTodoID").value = id;
}

function transferToDeleteBuffer(id) {
    document.getElementById('outputDeleteBuffer').value += id;
}

// Delete buffer functionality
const modalDeleteBuffer = document.getElementById('modal-delete-buffer');
const modalcloseDeleteBuffer = document.querySelector('.modal-delete-buffer-close-btn');
const modalDeleteBufferBody = document.getElementById('modal-delete-buffer-body')
const modalDeleteBufferInput = []


let isDeleteBufferClicked = true
const showDeleteBufferBtns = document.querySelectorAll(".modal-delete-buffer-show");
showDeleteBufferBtns.forEach(btn => btn.addEventListener('click', showDeleteBuffer))
modalcloseDeleteBuffer.addEventListener('click', closeDeleteBuffer)


function showDeleteBuffer() {
    if (isDeleteBufferClicked) {
        modalDeleteBuffer.classList.remove('hidden')
    }
}
function closeDeleteBuffer() {
    modalDeleteBuffer.classList.add('hidden')
}
function addValueToDeleteBuffer(value) {
    modalDeleteBufferBody.innerHTML += ' ' + '<div class="modal-delete-buffer-id">' + value + '</div>';
    modalDeleteBufferInput.push(value)
}




// Confirm delete functionality
const overlayBlock = document.querySelector('.overlay')
const modalDeleteConfirm = document.getElementById('modal-delete-confirm')
const modalDeleteConfirmCloseBtn = document.getElementById('modal-delete-confirm-close')
const modalDeleteConfirmInput = document.getElementById('delete_ids')

modalDeleteConfirmCloseBtn.addEventListener('click', () => {
    modalDeleteConfirm.classList.add('hidden')
    overlayBlock.classList.add('hidden')
})

document.getElementById('modal-delete-confirm-show').addEventListener('click', () => {
    modalDeleteConfirm.classList.remove('hidden');
    overlayBlock.classList.remove('hidden');
    closeDeleteBuffer()
    modalDeleteConfirmInput.value = JSON.stringify(modalDeleteBufferInput)
})