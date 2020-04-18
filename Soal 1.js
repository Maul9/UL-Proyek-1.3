const biodata = () => ({
    name: "Maulana Wijayakusuma",
    age: 20,
    address:
        "Jln. Duri Raya no.12 ,Kel. Duri Kepa , Kec. Kebon Jeruk, Kota DKI Jakarta, Jakarta Barat",
    hobbies: ["Listen Music", "Cycling", "Walking and playing game"],
    is_married: false,
    list_school: [

        {
            name: "SDN DURI KEPA 12 PAGI",
            year_in: 2005,
            year_out: 2011,
            major: null
        },
        {
            name: "SMP Assa'adatul Abadiyah",
            year_in: 2012,
            year_out: 2014,
            major: "Teknik Komputer Jaringan"
        },
        {
            name: "SMK Assa'adatul Abadiyah",
            year_in: 2015,
            year_out: 2017,
            major: "Teknik Komputer Jaringan"
        }
    ],
    skills: [
        {
            name: "English",
            level: "Normal"
        },
        {
            name: "Installation Software and Hardware Computer",
            level: "Advanced"
        }
    ],
    interest_in_coding: true
});

console.log(biodata());
