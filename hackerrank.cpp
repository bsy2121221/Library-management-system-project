#include <bits/stdc++.h>
#include<string.h>

using namespace std;

void hackerrankInString(string s) {
    string str="hackerrank";
    int length=s.length();
    int j;
    int count=0,temp=0;
    for(int i=0;i<str.length();i++)
    {
        for(j=count;j<length;count++)
        {
            if(s[i]==str[j])
            {
                temp++;
            break;
            }
        }
        if(j==length-1 || i==str.length()-1)
        break;


    }
    if(temp==str.length())
    cout<<"YES";
    else
    cout<<"NO";


}

int main()
{
    int q;
    cin >> q;
    for(int i=0;i<q;i++)
    {
        string s;
            cin>>s;
         hackerrankInString(s);
         cout<<endl;
    }

    


    return 0;
}
