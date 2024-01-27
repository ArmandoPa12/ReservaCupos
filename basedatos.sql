create database cupos;
use cupos;

create table persona
(
id integer not null auto_increment,
nombre varchar(30)not null,
ape_paterno varchar(40)not null,
ape_materno varchar(40)not null,
ci integer not null,
expendido varchar(10) not null,
est_civil varchar(10) not null,
nacimiento date not null,
primary key (id)
);

INSERT INTO persona VALUES (null, 'Laura', 'Lopez', 'Choque', 123456789, 'SC', 'CASADA',now());
INSERT INTO persona VALUES (null, 'Esmeralda', 'Álvarez', 'Suniga', 111223334, 'LP', 'CASADO','1982-01-05');
INSERT INTO persona VALUES (null, 'Pedro', 'Ortiz', 'Paredes', 897546211, 'CB', 'CASADO','1983-05-14');
INSERT INTO persona VALUES (null, 'Monica', 'Apaza', 'Vásquez', 864212562, 'SC', 'CASADA','1980-01-20');
INSERT INTO persona VALUES (null, 'Juana', 'Nina', 'Durán', 776548865, 'SC', 'CASADA','1988-05-17');
INSERT INTO persona VALUES (null, 'Maria', 'Vaca', 'Espinoza', 543165764, 'LP', 'CASADA','1978-10-03');
INSERT INTO persona VALUES (null, 'Cecilia', 'Torrez', 'Ticona', 765416832, 'CB', 'DIVORCIADA','1983-11-06');
INSERT INTO persona VALUES (null, 'Elena', 'Castro', 'Villarroel', 865468321, 'SC', 'CASADA','1985-04-14');
INSERT INTO persona VALUES (null, 'Armando', 'Paredes', 'Paredes', 123, 'SC', 'CASADO','1985-04-14');

create table rude
(
id integer not null auto_increment,
codigo integer unique not null,
nombre varchar(30)not null,
ape_paterno varchar(40)not null,
ape_materno varchar(40)not null,
sexo varchar(2) not null,
departamento varchar(25) not null,
provincia varchar (25) not null,
municipio varchar (25) not null,
comunidad varchar (25) not null,
zona varchar (25) not null,
calle varchar (25) not null,
n_vivienda varchar (25) not null,
celular_con integer not null,
idioma varchar (25) not null,
etnia varchar (25) not null,
primary key (id)
);



INSERT INTO rude VALUES (null, 257452, 'Erin', 'Ortiz', 'Durán', 'F', 'Chuquisaca','Ichilo', 'Frank','Brian','Stephen','428 Angela Way Apt. 650','6825','61994', 'GUARANI', 'Guaraní');
INSERT INTO rude VALUES (null, 258338, 'Sarah', 'Ticona', 'Villarroel', 'M', 'Cochabamba','Andrés Ibáñez', 'Amy','Robert','Colton','0472 Key Mountain Apt. 495','2784','50', 'QUECHUA', 'Itonama');
INSERT INTO rude VALUES (null, 651406, 'Kristina', 'Vásquez', 'Vásquez', 'M', 'La Paz','Ichilo', 'Zachary','Bobby','Michael','40416 Renee Tunnel','7664','41311107', 'QUECHUA', 'Aymara');
INSERT INTO rude VALUES (null, 792161, 'Catherine', 'Ticona', 'Paredes', 'F', 'Oruro','Andrés Ibáñez', 'Jonathan','Michael','Frederick','27478 Rhonda Turnpike Apt. 330','1207','936036', 'QUECHUA', 'Sirionó');
INSERT INTO rude VALUES (null, 948930, 'Alexander', 'Ticona', 'Espinoza', 'M', 'Oruro','Chiquitos', 'Travis','Joseph','Vincent','9892 John Trail Suite 641','2737','424251', 'ESPAÑOL', 'Yuracaré');
INSERT INTO rude VALUES (null, 801098, 'Clinton', 'Ticona', 'Nina', 'F', 'Potosí','Andrés Ibáñez', 'Mary','Jennifer','Mckenzie','44103 Jenna Cliff','3588','49', 'GUARANI', 'Mauri');   
INSERT INTO rude VALUES (null, 770855, 'Kelly', 'Espinoza', 'Suniga', 'M', 'Chuquisaca','Andrés Ibáñez', 'Jeffery','Kimberly','Jason','058 Amanda Stravenue','6951','41916', 'QUECHUA', 'Araona');
INSERT INTO rude VALUES (null, 149469, 'Martin', 'Nina', 'Castro', 'F', 'Chuquisaca','Warnes', 'Linda','Juan','Benjamin','36385 Elizabeth Squares','1296','4989165', 'ESPAÑOL', 'Tacana');
INSERT INTO rude VALUES (null, 962692, 'William', 'Paredes', 'Vásquez', 'M', 'Beni','Florida', 'Lawrence','Erika','Keith','12443 Torres Centers','8009','2686681', 'GUARANI', 'Mojeño');
INSERT INTO rude VALUES (null, 109172, 'Stephanie', 'Nina', 'Choque', 'M', 'Chuquisaca','Cordillera', 'Jacqueline','Theresa','Lisa','10688 Susan Coves Apt. 203','8847','7577', 'GUARANI', 'Joaquiniano');

INSERT INTO rude VALUES (null, 123456, 'Lucas', 'Paredes', 'Vásquez', 'M', 'Santa Cruz','Andrés Ibáñez', 'santa cruz de la sierra','nueva','villa','12443 Torres Centers','1024','78834368', 'ESPAÑOL', 'Ninguno');
INSERT INTO rude VALUES (null, 654321, 'Lucas', 'Paredes', 'Vásquez', 'M', 'Santa Cruz','Andrés Ibáñez', 'santa cruz de la sierra','nueva','villa','12443 Torres Centers','1024','78834368', 'ESPAÑOL', 'Ninguno');

create table escuela
(
id integer not null auto_increment,
codigo integer unique not null,
nombre varchar(30)not null,
departamento varchar(30) not null,
provincia varchar(30) not null,
ubicacion varchar(40)not null,
primary key (id)
);





INSERT INTO escuela VALUES (null, 575526, 'Melinda Daniel', 'La Paz', 'Murillo', 'Av/Erika B/Cindy');
INSERT INTO escuela VALUES (null, 496494, 'Erin Cook', 'La Paz', 'Manco Kapac', 'Av/Kenneth B/Michael');
INSERT INTO escuela VALUES (null, 755019, 'Lisa Allen', 'La Paz', 'Los Andes', 'Av/Logan B/Melissa');
INSERT INTO escuela VALUES (null, 950937, 'Donna Pearson', 'La Paz', 'Murillo', 'Av/Deborah B/Bradley');
INSERT INTO escuela VALUES (null, 687073, 'John Murphy', 'La Paz', 'Omasuyos', 'Av/Robert B/Brian');
INSERT INTO escuela VALUES (null, 507061, 'Dere kWang', 'La Paz', 'Bautista Saavedra', 'Av/Tara B/Grace');       
INSERT INTO escuela VALUES (null, 819713, 'Nicholas Campbell', 'La Paz', 'Nor Yungas', 'Av/James B/Danielle');   
INSERT INTO escuela VALUES (null, 991159, 'Cassandra Sampson', 'La Paz', 'Sud Yungas', 'Av/Benjamin B/Cynthia'); 
INSERT INTO escuela VALUES (null, 351819, 'James Callahan', 'La Paz', 'Bautista Saavedra', 'Av/Mark B/Jeremiah');
INSERT INTO escuela VALUES (null, 778193, 'Sarah Robinson', 'La Paz', 'Franz Tamayo', 'Av/Nathan B/Andrew');     
INSERT INTO escuela VALUES (null, 139706, 'Wand Weaver', 'La Paz', 'Bautista Saavedra', 'Av/Kelly B/Catherine');

INSERT INTO escuela VALUES (null, 732304, 'Joshua Herring', 'Cochabamba', 'Punata', 'Av/Rhonda B/Melanie');
INSERT INTO escuela VALUES (null, 648503, 'Brooke Jones', 'Cochabamba', 'Mizque', 'Av/Mary B/Kenneth');
INSERT INTO escuela VALUES (null, 991736, 'Paula Compton', 'Cochabamba', 'Germán Jordán', 'Av/Seth B/Colleen');
INSERT INTO escuela VALUES (null, 904043, 'Thomas Hernandez', 'Cochabamba', 'Tapacarí', 'Av/Jessica B/Regina');
INSERT INTO escuela VALUES (null, 570178, 'Nancy Mcdonald', 'Cochabamba', 'Campero', 'Av/Jerry B/Bruce');
INSERT INTO escuela VALUES (null, 410261, 'William Kidd', 'Cochabamba', 'Ayopaya', 'Av/Tina B/Spencer');
INSERT INTO escuela VALUES (null, 104526, 'Laura Robinson', 'Cochabamba', 'Campero', 'Av/Elizabeth B/Dale');
INSERT INTO escuela VALUES (null, 341292, 'Donald Chambers', 'Cochabamba', 'Germán Jordán', 'Av/Scott B/Thomas');
INSERT INTO escuela VALUES (null, 602567, 'Paul Brock', 'Cochabamba', 'Campero', 'Av/Jacob B/Timothy');
INSERT INTO escuela VALUES (null, 982180, 'Rachel Brown', 'Cochabamba', 'Capinota', 'Av/John B/Nathaniel');
INSERT INTO escuela VALUES (null, 688902, 'Natasha Haas', 'Cochabamba', 'Capinota', 'Av/Monica B/Eric');
INSERT INTO escuela VALUES (null, 319133, 'Paul Compton', 'Cochabamba', 'Ayopaya', 'Av/Dustin B/Karen');

INSERT INTO escuela VALUES (null, 100398, 'Travis Garcia', 'Potosí', 'Andrés Ibáñez', 'Av/James B/Joseph');
INSERT INTO escuela VALUES (null, 735917, 'Brett Rodriguez', 'Potosí', 'Chiquitos', 'Av/Rachel B/Trevor');
INSERT INTO escuela VALUES (null, 714235, 'Laura Rivera', 'Potosí', 'Ñuflo de Chávez', 'Av/Patricia B/Laura');
INSERT INTO escuela VALUES (null, 819511, 'David Nelson', 'Potosí', 'Cordillera', 'Av/Sarah B/Emily');
INSERT INTO escuela VALUES (null, 356187, 'Dean Adams', 'Potosí', 'Ñuflo de Chávez', 'Av/Chloe B/Christina');
INSERT INTO escuela VALUES (null, 628935, 'Ronald Williams', 'Potosí', 'Chiquitos', 'Av/Brenda B/Nathan');
INSERT INTO escuela VALUES (null, 369220, 'Robert Brown', 'Potosí', 'Vallegrande', 'Av/Alexis B/Justin');
INSERT INTO escuela VALUES (null, 352285, 'Erin Hanna', 'Potosí', 'Andrés Ibáñez', 'Av/Karen B/Michelle');
INSERT INTO escuela VALUES (null, 472214, 'Alicia Le', 'Potosí', 'Warnes', 'Av/Stacy B/Kelli');
INSERT INTO escuela VALUES (null, 527520, 'Thomas Mitchell', 'Potosí', 'Sara', 'Av/Emily B/Yvonne');
INSERT INTO escuela VALUES (null, 996741, 'Vincent Daniels', 'Potosí', 'Vallegrande', 'Av/Daniel B/Erik');
INSERT INTO escuela VALUES (null, 399052, 'Michael Williams', 'Potosí', 'Andrés Ibáñez', 'Av/Corey B/Luis');

INSERT INTO escuela VALUES (null, 870206, 'Gary Hughes', 'Potosí', 'Antonio Quijarro', 'Av/Natalie B/Melvin');
INSERT INTO escuela VALUES (null, 312747, 'Aaron Patrick', 'Potosí', 'Sur Lípez', 'Av/Jason B/Jason');
INSERT INTO escuela VALUES (null, 773537, 'Brooke Waller', 'Potosí', 'Antonio Quijarro', 'Av/Kyle B/Nicole');
INSERT INTO escuela VALUES (null, 152454, 'Joseph Murphy', 'Potosí', 'Antonio Quijarro', 'Av/Gabrielle B/Joshua');
INSERT INTO escuela VALUES (null, 302934, 'Scott Peters', 'Potosí', 'Antonio Quijarro', 'Av/Michael B/Jeremy');
INSERT INTO escuela VALUES (null, 290794, 'Kenneth Jones', 'Potosí', 'José María Linares', 'Av/Christina B/Charles');
INSERT INTO escuela VALUES (null, 636867, 'Kevin Ewing', 'Potosí', 'Nor Chichas', 'Av/Christine B/Christopher');
INSERT INTO escuela VALUES (null, 176130, 'Gloria Brock', 'Potosí', 'Sud Chichas', 'Av/Michael B/Matthew');
INSERT INTO escuela VALUES (null, 243334, 'Cody Hart', 'Potosí', 'Nor Lípez', 'Av/Monica B/Mia');
INSERT INTO escuela VALUES (null, 797239, 'Barbara Thomas', 'Potosí', 'Enrique Baldivieso', 'Av/Thomas B/Corey');
INSERT INTO escuela VALUES (null, 578386, 'Nicole Foster', 'Potosí', 'Enrique Baldivieso', 'Av/Joshua B/Willie');
INSERT INTO escuela VALUES (null, 561666, 'Randy Klein', 'Potosí', 'Sud Chichas', 'Av/Christina B/Derrick');

INSERT INTO escuela VALUES (null, 351974, 'Eric Wilson', 'Oruro', 'Eduardo Abaroa', 'Av/Anthony B/Thomas');
INSERT INTO escuela VALUES (null, 149901, 'Jacob Hall', 'Oruro', 'Ladislao Cabrera', 'Av/Lisa B/Dustin');
INSERT INTO escuela VALUES (null, 534933, 'Cindy Carr', 'Oruro', 'Poopó', 'Av/Curtis B/Brian');
INSERT INTO escuela VALUES (null, 157681, 'Kathy Morales', 'Oruro', 'Saucarí', 'Av/Walter B/Ryan');
INSERT INTO escuela VALUES (null, 191701, 'Andrew Young', 'Oruro', 'Litoral', 'Av/Kyle B/Alicia');
INSERT INTO escuela VALUES (null, 979273, 'Marc Fletcher', 'Oruro', 'Poopó', 'Av/Brenda B/Michael');
INSERT INTO escuela VALUES (null, 230734, 'Lisa Turner', 'Oruro', 'Saucarí', 'Av/Emily B/Mark');
INSERT INTO escuela VALUES (null, 239522, 'Steve Morris', 'Oruro', 'Sebastián Pagador', 'Av/Daniel B/Lauren');
INSERT INTO escuela VALUES (null, 777333, 'Jason Gilbert', 'Oruro', 'Carangas', 'Av/Timothy B/Danielle');
INSERT INTO escuela VALUES (null, 826133, 'Tammy Diaz', 'Oruro', 'Sajama', 'Av/Kyle B/Amy');
INSERT INTO escuela VALUES (null, 653832, 'Allison Wilson', 'Oruro', 'Ladislao Cabrera', 'Av/Joel B/Nathan');
INSERT INTO escuela VALUES (null, 492326, 'Alexandra Jacobson', 'Oruro', 'Sebastián Pagador', 'Av/Angela B/Adam');

INSERT INTO escuela VALUES (null, 594057, 'Gregory Benson', 'Tarija', 'José María Avilés', 'Av/Denise B/Timothy');
INSERT INTO escuela VALUES (null, 657546, 'David Murphy', 'Tarija', 'Cercado', 'Av/Melanie B/Julie');
INSERT INTO escuela VALUES (null, 758466, 'Robert Diaz', 'Tarija', 'Gran Chaco', 'Av/Ryan B/April');
INSERT INTO escuela VALUES (null, 501629, 'Stephanie Jacobson', 'Tarija', 'Cercado', 'Av/Katie B/Joseph');
INSERT INTO escuela VALUES (null, 807623, 'Gabriela French', 'Tarija', 'Burnet O’Connor', 'Av/Richard B/Nathan');
INSERT INTO escuela VALUES (null, 634691, 'Johnny Johnson', 'Tarija', 'Padcaya', 'Av/Lisa B/Amber');
INSERT INTO escuela VALUES (null, 549537, 'Christine Romero', 'Tarija', 'Aniceto Arce', 'Av/Corey B/Hunter');
INSERT INTO escuela VALUES (null, 741823, 'Justin Thompson', 'Tarija', 'Eustaquio Méndez', 'Av/Adrian B/Andrew');
INSERT INTO escuela VALUES (null, 472501, 'Wesley Rodriguez', 'Tarija', 'Padcaya', 'Av/Sarah B/Desiree');
INSERT INTO escuela VALUES (null, 315282, 'Monica Wood', 'Tarija', 'Aniceto Arce', 'Av/Thomas B/Donna');
INSERT INTO escuela VALUES (null, 992214, 'Michelle Ramos', 'Tarija', 'Burnet O’Connor', 'Av/Jane B/Michael');
INSERT INTO escuela VALUES (null, 538618, 'Joseph Potter', 'Tarija', 'El Puente', 'Av/Tina B/Michael');

INSERT INTO escuela VALUES (null, 718946, 'Tammy Wagner', 'Chuquisaca', 'Luis Calvo', 'Av/Shelly B/Alexander');
INSERT INTO escuela VALUES (null, 864723, 'Benjamin Diaz', 'Chuquisaca', 'Tomina', 'Av/Lisa B/Crystal');
INSERT INTO escuela VALUES (null, 471422, 'Brittany Sullivan', 'Chuquisaca', 'Luis Calvo', 'Av/Kathleen B/Randy');
INSERT INTO escuela VALUES (null, 514271, 'Michael Waters', 'Chuquisaca', 'Sud Cinti', 'Av/Sharon B/Larry');
INSERT INTO escuela VALUES (null, 692606, 'William Graham', 'Chuquisaca', 'Tomina', 'Av/Curtis B/Alexis');
INSERT INTO escuela VALUES (null, 314883, 'Robert Savage', 'Chuquisaca', 'Tomina', 'Av/Michael B/Pamela');
INSERT INTO escuela VALUES (null, 446405, 'Jennifer Hood', 'Chuquisaca', 'Belisario Boeto', 'Av/Cynthia B/Jeffrey');
INSERT INTO escuela VALUES (null, 393639, 'Jessica Dixon', 'Chuquisaca', 'Sud Cinti', 'Av/Michael B/Sarah');
INSERT INTO escuela VALUES (null, 882736, 'Linda Carlson', 'Chuquisaca', 'Nor Cinti', 'Av/Caleb B/Jeffrey');
INSERT INTO escuela VALUES (null, 715626, 'Steven Alexander', 'Chuquisaca', 'Yamparáez', 'Av/Cody B/Betty');
INSERT INTO escuela VALUES (null, 360577, 'Brittany Ruiz', 'Chuquisaca', 'Belisario Boeto', 'Av/Alan B/Troy');
INSERT INTO escuela VALUES (null, 883467, 'Yesenia Howard', 'Chuquisaca', 'Oropeza', 'Av/Ariel B/Christina');

INSERT INTO escuela VALUES (null, 823203, 'Timothy Diaz', 'Beni', 'Moxos', 'Av/David B/Samantha');
INSERT INTO escuela VALUES (null, 131151, 'Michelle Brown', 'Beni', 'Iténez', 'Av/Richard B/Matthew');
INSERT INTO escuela VALUES (null, 720813, 'Leslie Santos', 'Beni', 'Yacuma', 'Av/Janice B/Courtney');
INSERT INTO escuela VALUES (null, 467236, 'Lisa Roy', 'Beni', 'Yacuma', 'Av/Elizabeth B/Kenneth');
INSERT INTO escuela VALUES (null, 781130, 'Angela Shields', 'Beni', 'José Ballivián', 'Av/Kimberly B/Matthew');
INSERT INTO escuela VALUES (null, 184320, 'William Miles', 'Beni', 'José Ballivián', 'Av/William B/Ann');
INSERT INTO escuela VALUES (null, 190001, 'Gwendolyn Wheeler', 'Beni', 'Vaca Díez', 'Av/Patricia B/Nathan');
INSERT INTO escuela VALUES (null, 465456, 'Steven Weiss', 'Beni', 'José Ballivián', 'Av/Jennifer B/Ann');
INSERT INTO escuela VALUES (null, 652156, 'Darrell Shah', 'Beni', 'Cercado', 'Av/Randall B/Christopher');
INSERT INTO escuela VALUES (null, 372190, 'James Cook', 'Beni', 'Iténez', 'Av/Brittany B/Wendy');
INSERT INTO escuela VALUES (null, 382608, 'Tammy Bass', 'Beni', 'Iténez', 'Av/Toni B/Kyle');
INSERT INTO escuela VALUES (null, 780125, 'Heather Dunn', 'Beni', 'José Ballivián', 'Av/Erica B/Sarah');

INSERT INTO escuela VALUES (null, 448857, 'Melissa Williams', 'Pando', 'Federico Román', 'Av/Andrea B/April');
INSERT INTO escuela VALUES (null, 113550, 'Nicole Diaz', 'Pando', 'Nicolás Suárez', 'Av/Bryan B/Jonathan');
INSERT INTO escuela VALUES (null, 305706, 'Megan King', 'Pando', 'Manuripi', 'Av/Matthew B/David');
INSERT INTO escuela VALUES (null, 931784, 'Kimberly Duncan', 'Pando', 'Manuripi', 'Av/Travis B/John');
INSERT INTO escuela VALUES (null, 817561, 'Stacey Wood', 'Pando', 'Nicolás Suárez', 'Av/Michael B/Stephen');
INSERT INTO escuela VALUES (null, 239276, 'Donna Scott', 'Pando', 'Abuná', 'Av/Keith B/Justin');
INSERT INTO escuela VALUES (null, 631513, 'Paige Ramirez', 'Pando', 'Nicolás Suárez', 'Av/Amanda B/Bradley');
INSERT INTO escuela VALUES (null, 567419, 'Sheila Huffman', 'Pando', 'Abuná', 'Av/Gloria B/Kenneth');
INSERT INTO escuela VALUES (null, 328090, 'Abigail Bailey', 'Pando', 'Nicolás Suárez', 'Av/Lisa B/Heidi');
INSERT INTO escuela VALUES (null, 782197, 'Ian Mccormick', 'Pando', 'Abuná', 'Av/Marcia B/Nicholas');
INSERT INTO escuela VALUES (null, 581120, 'Sherry Holden', 'Pando', 'Abuná', 'Av/Micheal B/Denise');
INSERT INTO escuela VALUES (null, 481063, 'Cindy White', 'Pando', 'Federico Román', 'Av/Elizabeth B/Jonathan');

INSERT INTO escuela VALUES (null, 270152, 'Ross Anderson', 'Santa Cruz', 'Cordillera', 'Av/Bailey B/Grant');
INSERT INTO escuela VALUES (null, 719067, 'Michael Johnson', 'Santa Cruz', 'Sara', 'Av/Austin B/James');
INSERT INTO escuela VALUES (null, 684655, 'Allison Rivera', 'Santa Cruz', 'Vallegrande', 'Av/Michael B/Dana');      
INSERT INTO escuela VALUES (null, 219609, 'Janet Hughes', 'Santa Cruz', 'Cordillera', 'Av/Raymond B/Jessica');      
INSERT INTO escuela VALUES (null, 430189, 'Courtney Daniels', 'Santa Cruz', 'Ñuflo de Chávez', 'Av/Glenn B/Kendra');
INSERT INTO escuela VALUES (null, 740536, 'Johnny Gonzalez', 'Santa Cruz', 'Sara', 'Av/Sarah B/Christy');
INSERT INTO escuela VALUES (null, 723996, 'Lindsey Dunn', 'Santa Cruz', 'Ichilo', 'Av/Amanda B/Amanda');
INSERT INTO escuela VALUES (null, 743433, 'Kathy Whitaker', 'Santa Cruz', 'Andrés Ibáñez', 'Av/Dawn B/Roger');      
INSERT INTO escuela VALUES (null, 266363, 'Catherine Roach', 'Santa Cruz', 'Andrés Ibáñez', 'Av/Charles B/Jessica');
INSERT INTO escuela VALUES (null, 412824, 'Andrew Kemp', 'Santa Cruz', 'Warnes', 'Av/William B/Patricia');
INSERT INTO escuela VALUES (null, 470394, 'Scott Deleon', 'Santa Cruz', 'Chiquitos', 'Av/Michael B/Cassandra');     
INSERT INTO escuela VALUES (null, 760482, 'Joshua White', 'Santa Cruz', 'Chiquitos', 'Av/Amanda B/Cynthia');  

INSERT INTO escuela VALUES (null, 301501, 'Patricia Martinez', 'Santa Cruz', 'Andrés Ibáñez', 'Av/Jill B/Troy');
INSERT INTO escuela VALUES (null, 287809, 'Andrew Lopez', 'Santa Cruz', 'Andrés Ibáñez', 'Av/Stacey B/Tracy');
INSERT INTO escuela VALUES (null, 330016, 'Julian Sloan', 'Santa Cruz', 'Andrés Ibáñez', 'Av/Karen B/John');
INSERT INTO escuela VALUES (null, 422249, 'Michael Lawrence', 'Santa Cruz', 'Andrés Ibáñez', 'Av/Dawn B/Gary');
INSERT INTO escuela VALUES (null, 525407, 'Samantha Miller', 'Santa Cruz', 'Andrés Ibáñez', 'Av/Alyssa B/David');
INSERT INTO escuela VALUES (null, 923858, 'Brandon Richardson', 'Santa Cruz', 'Andrés Ibáñez', 'Av/David B/Mark');
INSERT INTO escuela VALUES (null, 330852, 'Eddie Schmidt', 'Santa Cruz', 'Andrés Ibáñez', 'Av/Jonathan B/Nicholas');
INSERT INTO escuela VALUES (null, 195456, 'Lisa Lewis', 'Santa Cruz', 'Andrés Ibáñez', 'Av/Melissa B/Ryan');
INSERT INTO escuela VALUES (null, 807398, 'Rebecca Hines', 'Santa Cruz', 'Andrés Ibáñez', 'Av/Hannah B/Melissa');
INSERT INTO escuela VALUES (null, 393179, 'Jennifer Cochran', 'Santa Cruz', 'Andrés Ibáñez', 'Av/Annette B/Nathaniel');

INSERT INTO escuela VALUES (null, 393869, 'Elvira Parada A', 'Santa Cruz', 'Andrés Ibáñez', 'Av/virge de lujan');
INSERT INTO escuela VALUES (null, 395875, 'Elvira Parada B', 'Santa Cruz', 'Andrés Ibáñez', 'Av/equipetrol B/esperanza');


create table sorteo
(
id integer not null auto_increment,
codigo_escuela integer not null,
nombre_escu varchar(25) not null,
grado varchar(25) not null,
curso varchar(20) not null,
ci_tutor integer not null,
relacion varchar(20) not null,
cod_estu integer,
nombre_estu varchar(20) not null,
ganador INT NOT NULL DEFAULT 0 CHECK (ganador IN (-1, 0, 1)),
primary key (id)
);


INSERT INTO sorteo VALUES (null, 575526,'Melinda Daniel', 'Primaria', 'Primero', '776548865','Padre','111223334','Esmeralda',0);

