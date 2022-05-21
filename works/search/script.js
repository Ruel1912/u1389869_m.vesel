let text = document.querySelector("p").innerHTML;
function replaceContent() {
    let pattern = document.getElementById("pattern").value;

    let result = "";
    for (let line of text.split("\n")){
        result += line.replaceAll(pattern,`<span>${pattern}</span>`);
    }

    document.querySelector("p").innerHTML = result;
}
