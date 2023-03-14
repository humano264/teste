<?php 
#include <iostream>
using namespace std;
int main()
{
int item, quant;
float n1=4.00, n2=4.50, n3=5.00, n4=2.00, n5=1.50, valor;
   
cin >> item;
   
cin >> quant;
   
if (item==1){
valor=n1*quant;
   } 
else if (item==2){
valor=n2*quant;
   } 
else if (item==3){
valor=n3*quant;
   } 
else if (item==4){
valor=n4*quant;
   } 
else if (item==5){
valor=n5*quant;
   }
cout << fixed;
cout.precision(2);
    
cout << "Total: R$ " << valor << endl;
    
return 0;   
}
?>