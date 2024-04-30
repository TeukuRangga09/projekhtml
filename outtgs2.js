// 15220723 Teuku Rangga Febrio
var kod=document.getElementById('kdtiket');

function kelas (kod){
    //kod.value=kod.value.toLocaleUpperCase();
    kod.value=kod.value.toUpperCase();
    if (kod.value == "EKO"){
        kelas="ekonomi";
        tarif=100;
        echo="ribu";
        document.write("kode kelas: "+kd.value+"<br>kelas "+kelas+", Tarif: "+tarif+"ribu");
    }
    else if (kod.value == "PRE"){
        kelas="premium";
        tarif=200;
        echo="ribu";
        document.write("kode kelas: "+kd.value+"<br>kelas "+kelas+", Tarif: "+tarif+"ribu");
    }
}