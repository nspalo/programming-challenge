#include <iostream>
using namespace std;

int main()
{
    int start = 100, end = 1000;
    
    cout<<"Armstrong Numbers:\nfrom "<<start<<" to "<<end<<"\n";
    
    for(int AnArmstrongNumber = start; AnArmstrongNumber <= end; AnArmstrongNumber++)
    {
        int sumOfCubeOfDigit=0,digit=0,number=AnArmstrongNumber;
        
        while(number>0)
        {    
            digit = number%10;
            sumOfCubeOfDigit += (digit*digit*digit);
            number /= 10;
        }
        
        if(AnArmstrongNumber==sumOfCubeOfDigit)
        {
            cout<<AnArmstrongNumber<<"\n";
        }
    }

    return 0;
}