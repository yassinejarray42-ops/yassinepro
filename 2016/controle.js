function verif() {
    j=document.getElementById("j").value
    m=document.getElementById("m").value
    a=document.getElementById("a").value
    if (document.getElementById("p").selectedIndex==0) {
        alert("pies non valide")
        return false
    }
    if (document.getElementById("s").selectedIndex==0) {
        alert("ssalle non valide")
        return false
    } 
    j=document.getElementById("j").value;
        m=document.getElementById("m").value;
        if ( m==1 || m==3 || m==5 || m==7 || m==8 || m==10 || m==12 && j>31){
            alert(" jour non valide");
            return false;
        }
        if(m==4 || m==6 || m==9 || m==11  && j>30){
            alert(" jour non valide");
            return false;
        }
        if (m==2 && a%4==0 && j>29){
            alert(" jour non valide");
            return false;
        }
        if (m==2 && a%4!=0 && j>28){
            alert(" jour non valide");
            return false;
        }


      }
    
      function annee(){
        d=new Date();
        document.getElementById("a").value=d.getFullYear();
        document.getElementById("m").value=d.getMonth()+1;
        document.getElementById("j").value=d.getDate();
    }