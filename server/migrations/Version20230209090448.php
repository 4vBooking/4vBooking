<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230209090448 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (1, 'Thane', 'Severe persistent asthma', 61, '80', 'Sclerosing keratitis, bilateral', 'Adverse effect of cocaine, subsequent encounter');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (2, 'Wilow', 'Underdosing of antineoplastic and immunosup drugs, init', 21, '5941', 'Athscl unsp type bypass of the left leg w ulceration of calf', 'Anterior dislocation of right humerus');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (3, 'Pincas', 'Mechanical lagophthalmos right upper eyelid', 22, '86975', 'Type 2 diab w mild nonprlf diabetic rtnop w macular edema', 'Somnolence, stupor and coma');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (4, 'Windy', 'Laceration of popliteal artery, right leg, sequela', 14, '56943', 'Accident to powered aircraft causing injury to occupant', 'Unsp fx shaft of r fibula, 7thF');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (5, 'Batholomew', 'Corrosions of ear drum', 59, '6', 'Hemiplga following oth nontraumatic intracranial hemorrhage', 'Other specified disorders of bone, lower leg');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (6, 'Thea', 'Milt op w explosn due to acc disch of own munit, milt, subs', 60, '19680', 'Burn of first degree of back of unspecified hand, sequela', 'Cystoid macular edema following cataract surgery, right eye');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (7, 'Shamus', 'Maternal care for prolapse of gravid uterus', 51, '592', 'Maternal care for transverse and oblique lie, other fetus', 'Unspecified injury of unspecified forearm, initial encounter');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (8, 'Zaria', 'Stress fracture, unsp toe(s), init encntr for fracture', 69, '59363', 'Other streptococcal arthritis, left elbow', 'Unsp fb in esophagus causing compression of trachea, sequela');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (9, 'Lyndy', 'Corrosion of unsp degree of unspecified knee, subs encntr', 34, '65221', 'Ped on rolr-skt injured in clsn w nonmtr vehicle, unsp, subs', 'Unspecified acute and subacute iridocyclitis');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (10, 'Ruy', 'Unsp intracap fx right femur, subs for clos fx w routn heal', 3, '6', 'Corrosion of second degree of unsp axilla, init encntr', 'Other specified injury of right renal artery, subs encntr');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (11, 'Emmalynne', 'Laceration of extn musc/fasc/tend at forearm level, unsp arm', 6, '52', 'Blood alcohol level of 60-79 mg/100 ml', 'Benign neoplasm of long bones of right lower limb');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (12, 'Leda', 'Toxic effects of unspecified metal', 90, '180', 'Other oral mucositis (ulcerative)', 'Nondisp fx of olecran pro w intartic extn l ulna, 7thM');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (13, 'Jeane', 'Other exposure to forces of nature, subsequent encounter', 10, '26', 'Fx oth skull and facial bones, unspecified side, sequela', 'Disp fx of lateral malleolus of l fibula, 7thQ');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (14, 'Ingunna', 'Unsp injury of fallopian tube, unspecified, subs encntr', 92, '7251', 'Strain flexor musc/fasc/tend l idx fngr at forarm lv, sqla', 'Unsp fx low end unsp femr, 7thM');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (15, 'Troy', 'Disorders of meninges, not elsewhere classified', 83, '2927', 'Early congenital syphilitic rhinitis', 'Pathological fracture, other site');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (16, 'Cissy', 'Terrorism involving firearms, civilian injured, sequela', 25, '0', 'Unsp car occupant injured in clsn w 2/3-whl mv in traf, init', 'Type II occipital condyle fracture, left side, 7thB');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (17, 'Floyd', 'Mixed cndct/snrl hear loss, uni w unrestr hear cntra side', 96, '4468', 'Toxic effect of tobacco cigarettes, assault, sequela', 'Retracted nipple associated with pregnancy, third trimester');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (18, 'Brunhilda', 'Sltr-haris Type III physl fx low end l femr, 7thK', 74, '67786', 'Stiffness of unspecified shoulder, not elsewhere classified', 'Poisoning by unsp psychotropic drug, self-harm, sequela');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (19, 'Denny', 'Toxic effect of unsp inorganic substance, accidental, init', 33, '16', 'Blister (nonthermal), left foot', 'Maternal care for excessive fetal growth, third trimester');");
        $this->addSql("insert into bungalow (id, id_zona, title, price, people_cantity, description, image) values (20, 'Dani', 'Subluxation and dislocation of T4/T5-T5/T6 thoracic vertebra', 72, '1203', 'Other specified dorsopathies, lumbosacral region', 'Intentional self-harm by unsp firearm discharge, subs encntr');");

        }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
