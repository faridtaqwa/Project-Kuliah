#include <iostream>
#include <fstream>
#include <stdlib.h>
#include <sstream>


using namespace std;


    int tot=0,tanggal,hari,jumlah,totalbayar,sisastok,hargaawal,keuntungan,kembali,investasi,beli,kas,carrier;
    string x,pil="ya",sewa,nama;
    ifstream baca;
    ofstream tulis;


int main()
{


    typedef struct{


        string nama,sewaalat;
        int stok,jumlah;
        float harga;
   }daftar;


   typedef daftar alat[5];


alat daftaralat;


daftaralat[0].nama = "tenda";
daftaralat[0].harga = 10000;
//membaca stok yang sudah diubah
baca.open("tenda.txt");
baca>>daftaralat[0].stok;
baca.close();
daftaralat[0].jumlah;
daftaralat[0].sewaalat;

daftaralat[1].nama = "carrier";
daftaralat[1].harga = 15000;
//membaca stok yang sudah diubah
baca.open("carrier.txt");
baca>>daftaralat[1].stok;
baca.close();
daftaralat[1].jumlah;
daftaralat[1].sewaalat;

daftaralat[2].nama = "sepatu";
daftaralat[2].harga = 7000;
//membaca stok yang sudah diubah
baca.open("sepatu.txt");
baca>>daftaralat[2].stok;
baca.close();
daftaralat[2].jumlah;
daftaralat[2].sewaalat;

daftaralat[3].nama = "senter";
daftaralat[3].harga = 5000;
//membaca stok yang sudah diubah
baca.open("senter.txt");
baca>>daftaralat[3].stok;
baca.close();
daftaralat[3].jumlah;
daftaralat[3].sewaalat;

daftaralat[4].nama = "sleepingbag";
daftaralat[4].harga = 8000;
//membaca stok yang sudah diubah
baca.open("sb.txt");
baca>>daftaralat[4].stok;
baca.close();
daftaralat[4].jumlah;
daftaralat[4].sewaalat;


cout<<"\t\t\t\t\t==================================\n";
cout<<"\t\t\t\t\tProgram Penyewaan alat-alat hiking\n";
cout<<"\t\t\t\t\t==================================\n"<<endl;


//menu
    while (x != "keluar"){
        cout<<"1. Daftar alat "<<endl;
        cout<<"2. Sewa alat "<<endl;
        cout<<"3. Melihat keuntungan yang disewa & Investasi "<<endl;
        cout<<"4. Melihat alat yang disewa "<<endl;
        cout<<"5. Tambah stok "<<endl;
        cout<<"6. Keluar"<<endl;
        cout<<"Masukkan Pilihan : ";
        cin>>x;
        cout<<endl;


        //pilihan pertama
        if (x=="1"){
            for (int i=0;i<=4;i++){
                    cout<<"================================"<<endl;
                    cout<<"Nama alat : "<<daftaralat[i].nama<<endl;
                    cout<<"Stok persediaan : "<<daftaralat[i].stok<<endl;
                    cout<<"Harga per 24 jam :  Rp "<<daftaralat[i].harga<<endl;
            }
            cout<<"================================"<<endl;
            cout<<endl<<endl<<endl;


        //pilihan kedua
        }   else if (x=="2"){
                system("cls");
                //tanggal dan hari dideklarasikan nilainya agar masuk kedalam proses while
                tanggal=31;
                hari=8;
                pil="ya";
                cout<<"Nama penyewa : ";
                //menulisa nama kedalam txt
                fflush(stdin);
                getline(cin,nama);
                fflush(stdin);
                tulis.open("nama.txt");
                tulis << nama;
                tulis.close();
                //program dibatasi tanggal hanya sampai 30, jika lebih akan mengeluarkan teks error
                while (tanggal>30){
                    cout<<"Tanggal hari ini : ";
                    cin>>tanggal;
                        if (tanggal>30){
                        cout<<"error!!!"<<endl;
                        }
                }
                //program dibatasi penyewaan hanya sampai 7 hari, jika lebih akan mengeluarkan teks error
                while (hari>7){
                    cout<<"Pelanggan menyewa berapa hari?(maksimal 7hari penyewaan) : ";
                    cin>>hari;
                        if (hari>7){
                        cout<<"error!!!"<<endl;
                        }
                        cout<<endl<<"========================"<<endl;
            for (int i=0;i<5;i++){
                cout <<daftaralat[i].nama<<"("<<daftaralat[i].stok<<")"<<" Rp."<<daftaralat[i].harga<<endl;
            }
            cout<<"========================"<<endl;
            cout<<endl<<endl;
                }
                    while (pil!="tidak"){
                        cout<<"Alat yang disewa : ";
                        cin>>sewa;
                            for (int i=0;i<5;i++){
                                if (daftaralat[i].nama == sewa){
                                        daftaralat[i].sewaalat=sewa;
                                        cout<<"======================================="<<endl;
                                        cout <<"Nama alat : "<<daftaralat[i].nama<<endl;
                                        cout <<"Stok alat : "<<daftaralat[i].stok<<endl;
                                        cout <<"Harga sewa alat per harinya : Rp."<<daftaralat[i].harga<<endl;
                                        cout<<"======================================="<<endl;
                                        cout<<"Jumlah yang ingin disewa : ";
                                        cin>>daftaralat[i].jumlah;
                                        cout<<endl;
                                            if (daftaralat[i].jumlah>daftaralat[i].stok){
                                                //jika tidak ada stok akan mmuncul pesan error
                                                cout<<"Error!!! Silahkan menginput ulang alat yang disewa"<<endl;
                                            } else if (daftaralat[i].jumlah<=daftaralat[i].stok){
                                                totalbayar = daftaralat[i].harga*daftaralat[i].jumlah*hari+tot;
                                                daftaralat[i].stok = daftaralat[i].stok - daftaralat[i].jumlah;
                                                cout<<endl;
                                            //pertanyaan jika pelanggan ingin menyewa barang yang lain
                                            cout<<"ingin menyewa lagi?(ya/tidak) : ";
                                            cin>>pil;
                                            cout<<endl;
                                            tot=totalbayar;
                                            }
                                }

                        }
                    }
                    cout<<"-----Transaksi Berhasil!!-----"<<endl;
                    cout<<"Total Harga : Rp." <<tot<<endl;
                        for (int i=0;i<5;i++){
                            cout<<"Sisa Stok alat "<<daftaralat[i].nama<<" : "<<daftaralat[i].stok<<endl;
                        }
                        cout<<"------------------------------"<<endl;
                        cout <<endl;


        //pilihan ketiga
        } else if (x=="3"){
            system("cls");
                cout <<"Masukkan Nama Alat : ";
                cin>>sewa;
                cout<<endl;
                    for (int i=0;i<5;i++){
                        daftaralat[i].sewaalat=sewa;
                            if (daftaralat[i].nama == daftaralat[i].sewaalat){
                                cout<<"======================================================"<<endl;
                                cout <<"Nama alat : "<<daftaralat[i].nama<<endl;
                                    if (daftaralat[i].sewaalat=="tenda"){
                                        hargaawal=10000;
                                    } else if (daftaralat[i].sewaalat=="carrier"){
                                        hargaawal=12000;
                                    } else if (daftaralat[i].sewaalat=="sepatu"){
                                        hargaawal=7000;
                                    } else if (daftaralat[i].sewaalat=="senter"){
                                        hargaawal=3000;
                                    } else if (daftaralat[i].sewaalat=="sleepingbag"){
                                        hargaawal=4000;
                                    }
                            keuntungan= tot-(hargaawal*daftaralat[i].jumlah);
                            investasi=keuntungan-hargaawal;
                            cout<<"Harga awal : "<<hargaawal<<endl;
                            cout<<"Keuntungan : "<<keuntungan<<endl;
                            cout<<"Investasi  : "<<investasi<<endl;
                            beli=investasi/hargaawal;
                            kas=investasi-hargaawal*beli;
                            if(beli>=1){
                            cout<<"investasi akan dibelikan lagi tenda sebanyak : "<<beli<<" buah"<<endl;
                            }else {
                            cout<<"investasi belum bisa dibelikan lagi barang baru"<<endl;
                            }
                            cout<<"Uang kas tersimpan : "<<kas<<endl;
                            cout<<"======================================================"<<endl<<endl;
                            }
                    }


        //pilihan keempat
        } else if(x=="4"){
            system("cls");
            //membaca teks yang sudah diinput
                baca.open("nama.txt");
                fflush(stdin);
                getline(baca, nama);
                fflush(stdin);
                baca.close();
                cout<<"================================"<<endl;
                cout<<"Nama penyewa : "<<nama<<endl;
                    for (int i=0;i<5;i++){
                        if (daftaralat[i].nama==daftaralat[i].sewaalat){
                            cout<<daftaralat[i].nama<<" yang disewa : " <<daftaralat[i].jumlah<<endl;
                        }

                    }
                    if(tanggal+hari<30){
                        kembali=(tanggal+hari);
                    }
                    else if (tanggal+hari>=30){
                        kembali=(tanggal+hari)-30;
                    }
                    if (kembali==0){
                        kembali=1;
                    }
                    //tulis
                    tulis.open("kembali.txt");
                    tulis << kembali;
                    tulis.close();
                    //baca
                    baca.open("kembali.txt");
                    baca>>kembali;
                    baca.close();
                    cout<<"Pengembalian tanggal : "<<kembali<<endl;
                cout<<"================================"<<endl<<endl;
        //pilihan kelima


        } else if (x=="5"){
            system("cls");
                cout<<"Masukkan nama alat : ";
                cin>>sewa;
                    for (int i=0; i<5; i++){
                        if(daftaralat[i].nama == sewa){
                            cout<<" Nama alat : "<<daftaralat[i].nama<<endl;
                            cout<<" Stok alat : "<<daftaralat[i].stok<<endl;
                            cout<<endl;
                            cout<<"Masukkan jumlah alat yang ingin ditambah : ";
                            cin>>jumlah;
                            sisastok=daftaralat[i].stok+jumlah;
                            cout <<"Stok Alat Sekarang : "<<sisastok<<endl;
                            cout<<endl;
                            daftaralat[i].stok = sisastok;
                        }
                    }


        //pilihan keenam
        } else if (x=="6"){
            break;
        }
    //untuk menyimpan stok sisa kedalam file txt
    }   for (int i=0; i<5; i++){
                if (daftaralat[i].nama=="carrier"){
                    tulis.open("carrier.txt");
                    tulis << daftaralat[i].stok;
                    tulis.close();
                } else if (daftaralat[i].nama=="tenda"){
                    tulis.open("tenda.txt");
                    tulis << daftaralat[i].stok;
                    tulis.close();
            } else if (daftaralat[i].nama=="senter"){
                    tulis.open("senter.txt");
                    tulis << daftaralat[i].stok;
                    tulis.close();
            } else if (daftaralat[i].nama=="sepatu"){
                    tulis.open("sepatu.txt");
                    tulis << daftaralat[i].stok;
                    tulis.close();
             } else if (daftaralat[i].nama=="sleepingbag"){
                    tulis.open("sb.txt");
                    tulis << daftaralat[i].stok;
                    tulis.close();
             }
             cout<<"sisa stok "<<daftaralat[i].nama<<" saat ini : "<<daftaralat[i].stok<<endl;

    }
    cout<<endl;
    //tombol keluar untuk mengetik apa saja agar pengguna bisa keluar dari program
    system("pause");
}

//agar stok disimpan,harap menggunakan tombol keluar atau 6. jika menekan tombol x,stok tidak akan berubah
//selesai
//end
