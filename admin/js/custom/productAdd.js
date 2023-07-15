const myPic = document.getElementsByName("myPic[]")[0];
const images = document.getElementById("images");

myPic.addEventListener("change", () => {
    images.innerHTML = "";
  const files = myPic.files;
  console.log(files);
  Array.from(files).map(file => {
    if (file) {
      const div = document.createElement("div");
      const img = document.createElement("img");
      img.src = URL.createObjectURL(file);
      img.style.cssText = `
        width: 100px;
        height: 100px;
        object-fit: cover;
      `;
      div.appendChild(img);
      images.appendChild(div);

      // Add click event listener to remove the image
      div.addEventListener('click', () => {
        images.removeChild(div);
        // Remove corresponding file from the FileList
        const index = Array.from(images.children).indexOf(div);
        if (index !== -1) {
          const newFiles = [];
          for (let i = 0; i < files.length; i++) {
            if (i !== index) {
              newFiles.push(files[i]);
            }
          }
          myPic.files = new FileList(newFiles);
        }
      });
    }
  });
});