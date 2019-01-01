var form=document.getElementById("form");
var notif=document.getElementById("notif");
var close=document.getElementById("close");
var txtnotif=document.getElementById("txtnotif");
notif.style.display='none';
close.addEventListener("click",function(){
  notif.style.display='none';
});

function cari(f){
  var req=new XMLHttpRequest();
  req.onreadystatechange=function(){
    if(this.readyState==4 && this.status==200){
      form.innerHTML=this.responseText;
    }
  }
  req.open("get","pg/"+f+"/view.php?q="+document.getElementById("txtcari").value);
  req.send(null);
}

function view(f){
  var req=new XMLHttpRequest();
  req.onreadystatechange=function(){
    if(this.readyState==4 && this.status==200){
      form.innerHTML=this.responseText;
    }
  }
  req.open("get","pg/"+f+"/view.php?q=");
  req.send(null);
}

function frm(f){
  var req=new XMLHttpRequest();
  req.onreadystatechange=function(){
    if(this.readyState==4 && this.status==200){
      form.innerHTML=this.responseText;
    }
  }
  req.open("get","pg/"+f+"/add.php");
  req.send(null);
}

function simp(act,f){
  var data=[];
  data[0]=document.getElementById("1").value;
  data[1]=document.getElementById("2").value;
  data[2]=document.getElementById("3").value;
  data[3]=document.getElementById("4").value;
  data[4]=document.getElementById("5").value;
  data[5]=document.getElementById("6").value;
  data[6]=document.getElementById("7").value;
  data[7]=document.getElementById("8").value;

  if(data[0]=="" || data[1]=="" || data[2]=="" || data[3]=="" || data[4]=="" || data[5]=="" || data[6]=="" || data[7]==""){
    notif.style.display='inherit';
    txtnotif.innerHTML="Isi Semua Form dengan Data Yang Valid";
    return;
  }
  var formData=new FormData();
  for (var i = 0; i < data.length; i++) {
    formData.append(""+i,data[i]);
  }

  var req=new XMLHttpRequest();
  req.onreadystatechange=function(){
    if(this.readyState==4 && this.status==200){
      notif.style.display='inherit';
      txtnotif.innerHTML=this.responseText;
	    view(f);
    }
  }
  if(act=="add")req.open("POST","act/"+f+"/add.php?q=add");
  else if(act=="upd")req.open("POST","act/"+f+"/add.php?q=upd");
  req.send(formData);
}

function del(kode,f){
  var formData=new FormData();
  formData.append("kode",kode);
  var req=new XMLHttpRequest();
  req.onreadystatechange=function(){
    if(this.readyState==4 && this.status==200){
      notif.style.display='inherit';
      txtnotif.innerHTML=this.responseText;
	     view(f);
    }
  }
  req.open("POST","act/"+f+"/del.php");
  req.send(formData);
}

function upd(kode,f){
  var req=new XMLHttpRequest();
  req.onreadystatechange=function(){
    if(this.readyState==4 && this.status==200){
      form.innerHTML=this.responseText;
      if(f=="trn") setval();
    }
  }
  req.open("get","pg/"+f+"/upd.php?q="+kode);
  req.send(null);
}

function utama(){
  var req=new XMLHttpRequest();
  req.onreadystatechange=function(){
    if(this.readyState==4 && this.status==200){
      form.innerHTML=this.responseText;
    }
  }
  req.open("get","pg/utama.php");
  req.send(null);
}

function setval(){
  svalue("harga");
  svalue("stock");
}

function optkd(){
  setval();
  document.getElementById("6").value="";
  document.getElementById("7").value="";
}

function svalue(field){
  var txt=document.getElementById(field);
  var kode=document.getElementById("3").value;
  var req=new XMLHttpRequest();
  req.onreadystatechange=function(){
    if(this.readyState==4 && this.status==200){
      txt.value=this.responseText;
    }
  }
  req.open("get","act/trn/"+field+".php?q="+kode);
  req.send(null);
}

function optjum(){
  var jumlah=document.getElementById("6").value;
  var stok=document.getElementById("stock").value;
  var harga=document.getElementById("harga").value;
  var total=document.getElementById("7");
  if(parseInt(jumlah)>parseInt(stok) || parseInt(jumlah)<1){
    notif.style.display='inherit';
    txtnotif.innerHTML="Jumlah Pembelian Melebihi Stok, Masukkan Nilai Yang Valid";
    total.value="";
    return;
  }
  total.value=(harga*jumlah);
}
