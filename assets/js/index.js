const tocElement = document.getElementById("toc_container");
if (tocElement) {
  const contents = tocElement.querySelector(".toc_list");
  contents.style.display = "none";

  const buttonElement = document.createElement("button");
  buttonElement.id = "toc-status-button";
  buttonElement.innerText = "表示";
  tocElement.appendChild(buttonElement);

  buttonElement.addEventListener("click", () => {
    if (contents.style.display === "none") {
      contents.style.display = "block";
      buttonElement.innerText = "非表示";
    } else {
      contents.style.display = "none";
      buttonElement.innerText = "表示";
    }
  });
}
