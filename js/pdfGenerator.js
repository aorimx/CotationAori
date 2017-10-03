var doc = new jsPDF()
var nombre = document.getElementById("inNombre").value;
doc.text(nombre, 10, 10);
doc.save('a4.pdf');