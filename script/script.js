const inputPost = document.getElementById("post-form");
const textInput = document.querySelector("textarea[name='post_content']")
const container = document.querySelector(".container");
let keys = 0

document.addEventListener("DOMContentLoaded",
  () => {
    for (let key in localStorage) {
      const post = document.createElement("div");
      post.classList.add("Posting");
      post.classList.add("m-2");
      post.classList.add("d-flex");
      post.classList.add("card");
      post.classList.add("card-body");
      post.classList.add("rounded-2");
      post.classList.add("p-1");
      post.innerHTML = `
     <img class="perfil col medium" src="img/circle-user-solid-full.svg" alt="foto de perfil">
          <h3 class="col">{nome}</h3>
        </div>
        <p>${localStorage.getItem(key)}</p>
      
      </div>
`;
      container.appendChild(post);
    }
  }
)
  

inputPost.addEventListener("submit", (e) => {
  e.preventDefault();
  const post = document.createElement("div");
  post.classList.add("Posting");
  post.classList.add("m-2");
  post.classList.add("d-flex");
  post.classList.add("card");
  post.classList.add("card-body");
  post.classList.add("rounded-2");
  post.classList.add("p-1");
  const postContent = textInput.value;

  post.innerHTML = `
     <img class="perfil col medium" src="img/circle-user-solid-full.svg" alt="foto de perfil">
          <h3 class="col">{nome}</h3>
        </div>
        <p>${postContent}</p>
      
      </div>
`;
textInput.value = " ";
textInput.focus();
container.appendChild(post);
localStorage.setItem(keys, postContent)
keys++;
})