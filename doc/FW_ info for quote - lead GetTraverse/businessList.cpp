#include<iostream>
#include<fstream>
#include"businessList.h"
using namespace std;
//implement copy , assignment constructor, rule of 5

BusinessList::BusinessList():size(0){
	list = new Business*[size];
}
BusinessList::~BusinessList(){
	cout<<"DESTRUCTOR"<<endl<<endl<<endl;
	if (list!=NULL||size>0){
		for (int i=0;i<size;i++){
			cout<<"deleting element "<<i<<endl;
			//list[i]->print();
			delete list[i];
			list[i]=NULL;
		}
		delete [] list;
		list=NULL;
	}
}
bool BusinessList::inFile(string name){
	ifstream file(name);
	//cout<<"2"<<endl;
	if (file.is_open()){
		string line;
		while(getline(file,line)){
			//cout<<"startloop"<<endl;
			if (line.size()>500){
				//cout<<"3"<<endl;
				//cout<<"4"<<endl;
				//cout<<size<<endl;
				a = new Business(line);

				string zips[20] =    {"34134","34110","34106","34109","34119","34116","34105","34103","34102","34112","34113","34145","34140","34114","34117","34142","34141","34137","34139","34138"};
				int zipsize = 19;
				for (int i=0;i<zipsize;i++){
					//cout<<i<<endl;
					if(a->getZip() == zips[i]){
						grow();
						//cout<<"adding business"<<endl;
						list[size-1] = new Business(line);
						list[size-1]->print();
						cout<<endl;
						//cout << "Pointer Value of A          :"<<*a<<endl;
						//cout << "Pointer Value of list[i]    :"<<list[size-1]<<endl<<endl<<endl;
					}
				}
				delete a;
				a = NULL;
				if (size>10000)
					return 1;
			}
		}
	
	}
	
	return 1;		
}
bool BusinessList::exportFile(){
	return 0;
}

bool BusinessList::importAll(){
	return 0;
}
bool BusinessList::exportZips(){
	return 0;
}
void BusinessList::grow(){
	Business ** temp = new Business*[size+1];
	for (int i=0;i<size;i++){
		temp[i]=list[i];
	}
	temp[size]=NULL;
	delete [] list;
	list = NULL;
	list = temp;
	temp=NULL;
	size++;
}
