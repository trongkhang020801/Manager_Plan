            var gt=0
            var iprice=document.getElementsByClassName('iprice');
            var mgg=document.getElementById('mgg');
            var iquantity=document.getElementsByClassName('iquantity');
            var itotal=document.getElementsByClassName('itoalt');     
            var gtotal=document.getElementById('gtotal')                                  
            function subTotal(){
                gt=0;
                for(let i=0;i<iprice.length;i++){
                    itotal[i].innerText= Number((iprice[i].value)*(iquantity[i].value)).toLocaleString('vi-VN', {
                        style: 'currency',
                        currency: 'VND'
                    });
                    gt=gt+(iprice[i].value)*(iquantity[i].value);  
                }
                gt=gt-mgg.value
                console.log(mgg.value)
                gtotal.innerText=Number(gt).toLocaleString('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                });
            }

            subTotal()
            var dec=document.querySelectorAll('.dec')
            var inc=document.querySelectorAll('.inc')
            dec.forEach(element => {
                element.onclick=() => {
                    subTotal()
                }
            });
            inc.forEach(element => {
                element.onclick=() => {
                    subTotal()
                }
            });

           