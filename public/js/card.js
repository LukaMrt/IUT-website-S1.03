class Card extends HTMLElement {

    constructor() {
        super();

        let card = document.createElement("div");
        card.classList.add("card");

        let title = document.createElement("h3");
        title.innerHTML = escape(`this.getAttribute("title")`);

        let content = document.createElement("p");
        content.innerHTML = escape(this.getAttribute("content"));

        card.appendChild(title);
        card.appendChild(content);
        this.appendChild(card);
    }

}

customElements.define("custom-card", Card);
