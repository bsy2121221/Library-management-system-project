#include<iostream>
using namespace std;
int main()
 {
	int t;
	cin>>t;
	while(t--)
	{
	    int m,k,n;
	    vector<string> vect;
	    cin>>m>>k>>n;
	    while(n!=0)
	    {
	        int rem=n%2;
	        vect.push_back(rem);
	        n=n/2;
	    }
	    vect.reverse(vect.begin(),vect.end());
	    for(int i=0;i<n;i++)
	    {
	        for(int j=0;j<vect.end();j++)
	        {
	        if(vect[j]=="0")
	        vect[i]="01";
	        else
	        vect[i]="10";
	        }
	    }
	}
	return 0;
}