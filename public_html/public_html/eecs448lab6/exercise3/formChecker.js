function validateForm() {    
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(document.forms["purchaseForm"]["emailAddy"].value == "" || !(document.forms["purchaseForm"]["emailAddy"].value.match(validRegex))) {
        alert( "Please provide a valid EMail Address!" );
        document.purchaseForm.emailAddy.focus() ;
        return false;
    }

    if(document.forms["purchaseForm"]["userPassword"].value == "" ) {
        alert( "Please provide a Password!" );
        document.purchaseForm.userPassword.focus() ;
        return false;
    }

    if(document.forms["purchaseForm"]["numOfFuji"].value == "" ) {
        alert( "Please provide desired number of Fuji Apples!" );
        document.purchaseForm.numOfFuji.focus() ;
        return false;
    }

    if(document.forms["purchaseForm"]["numOfGoldenDelicious"].value == "" ) {
        alert( "Please provide desired number of Golden Delicious Apples!" );
        document.purchaseForm.numOfGoldenDelicious.focus() ;
        return false;
    }

    if(document.forms["purchaseForm"]["numOfHoneycrisp"].value == "" ) {
        alert( "Please provide desired number of Honetcrisp Apples!" );
        document.purchaseForm.numOfHoneycrisp.focus() ;
        return false;
    }


    var shippingRadioButtons = document.getElementsByName("shippingSpeed");
    var hasSelectedShippingSpeed = false;
    for(let i = 0; i < shippingRadioButtons.length; i++){
        if(shippingRadioButtons[i].checked){
            hasSelectedShippingSpeed = true;
        }
    }
    if(!hasSelectedShippingSpeed){
        alert( "Please Select your Preferred Shipping Speed!" );
        return(false);
    }

    return(true);
  }