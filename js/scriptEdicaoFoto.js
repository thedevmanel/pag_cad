let photo = document.getElementById("image-edit-inside");
let file = document.getElementById("flImage");

photo.addEventListener("click", () => {
  file.click();
});

file.addEventListener("change", (event) => {
  if (file.files.length <= 0) {
    return 0;
  }

  let reader = new FileReader();

  reader.onload = () => {
    photo.src = reader.result;
  };

  reader.readAsDataURL(file.files[0]);
})