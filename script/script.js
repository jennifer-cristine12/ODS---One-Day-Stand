const inputPost = document.getElementById("post-form");
const textInput = document.querySelector("textarea[name='post_content']")
const container = document.querySelector(".container");
let keys = 0


console.clear();

function getPosts() {
  fetch("../data/post.json", {
    method: "GET"
  })
    .then(response => response.json())
    .then(data => {

      data.map(post => {
        const cardPost = document.createElement("div");
        cardPost.classList.add("Posting");
        cardPost.classList.add("m-2");
        cardPost.classList.add("d-flex");
        cardPost.classList.add("card");
        cardPost.classList.add("card-body");
        cardPost.classList.add("rounded-2");
        cardPost.classList.add("p-1");


        cardPost.innerHTML = `
     <img class="perfil col medium" src="img/circle-user-solid-full.svg" alt="foto de perfil">
          <h3 class="col">${post.nome}</h3>
        </div>
        <p>${post}</p>
      
      </div>
`;
        container.appendChild(cardPost);
      })

    })
    .catch((err) => { console.error(err) })
}
document.addEventListener("DOMContentLoaded",
  () => {
    getPosts();

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