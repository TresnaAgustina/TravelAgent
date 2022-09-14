// const dragArea = document.querySelector('.drag__area');
// const dragText = document.querySelector('.header');

// let button = document.querySelector('.button');
// let input = document.querySelector('.input');

// let file;

// button.onclick = () => {
//     input.click();
// }

// // for browse
// input.addEventListener('change', function () {
//     file = this.files[0];

//     dragArea.classList.add('active');
//     displaFile()
// })


// // for file dragover inside the drag area
// dragArea.addEventListener('dragover', (event) => {
//     event.preventDefault();

//     dragText.textContent = "Release File";
//     dragArea.classList.add("active");

// });


// // for file leave the drag area
// dragArea.addEventListener('dragleave', (event) => {

//     dragText.textContent = "Drag and Drop";
//     dragArea.classList.remove("active");


// });


// // for file dropped inside drag area
// dragArea.addEventListener('drop', (event) => {
//     event.preventDefault();

//     // to accses img
//     file = event.dataTransfer.files[0];

//     displaFile()
// });


// function displaFile() {
//     // acces file type
//     let fileType = file.type;

//     // for selection file type
//     let validExtensions = ['image/jpg', 'image/jpeg', 'image/png', 'image/xml'];

//     if (validExtensions.includes(fileType)) {
//         let fileReader = new FileReader();

//         fileReader.onload = () => {
//             let fileURL = fileReader.result;

//             let imgTag = `<img src="${fileURL}" alt="">`
//             dragArea.innerHTML = imgTag;
//         };
//         fileReader.readAsDataURL(file);
//     } else {
//         alert("This File Type is Not Supported")
//         dropArea.classList.remove('active');
//     }
// }