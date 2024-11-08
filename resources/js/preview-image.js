const dropzoneFile = document.getElementById("dropzone-file");

dropzoneFile.addEventListener("change", (event) => {
    const imagePreview = document.getElementById("image-preview");
    const uploadPlaceholder = document.getElementById("upload-placeholder");
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            imagePreview.src = e.target.result;
            imagePreview.classList.remove("hidden");
            uploadPlaceholder.classList.add("hidden");
        };
        reader.readAsDataURL(file);
    } else {
        imagePreview.src = "";
        imagePreview.classList.add("hidden");
        uploadPlaceholder.classList.remove("hidden");
    }
});
