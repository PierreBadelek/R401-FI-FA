Drop table if exists administration, entreprise, etudiant, offre, poste, recrute, postule, reponse, notification, cv CASCADE;

create table administration
(
    idprofil   serial
        primary key,
    nom        text not null
        constraint administration_nom_check
            check (nom = upper(nom)),
    prenom     text not null,
    formation  text not null,
    email      text not null,
    motdepasse text not null
        constraint administration_motdepasse_check
            check ((length(motdepasse) >= 8) AND (motdepasse ~ '[A-Z]'::text) AND (motdepasse ~ '[a-z]'::text) AND
                   (motdepasse ~ '[0-9]'::text) AND (motdepasse ~ '[!@#$%^&*()]'::text) AND
                   (NOT (motdepasse ~ '^(password|123456|admin)$'::text))),
    role       text not null
);

alter table administration
    owner to postgres;

create table entreprise
(
    identreprise    serial
        primary key,
    nom             text        not null,
    logo            varchar(255),
    adresse         text        not null,
    ville           text        not null,
    codepostal      varchar(5)  not null
        constraint entreprise_codepostal_check
            check (length((codepostal)::text) = 5),
    numtel          varchar(10) not null
        constraint entreprise_numtel_check
            check (length((numtel)::text) = 10),
    secteuractivite text        not null,
    email           text        not null
        constraint entreprise_email_check
            check (POSITION(('@'::text) IN (email)) > 0)
);

alter table entreprise
    owner to postgres;

create table reponse
(
    idreponse    integer,
    idprofil     integer not null
        references administration,
    identreprise integer not null
        references entreprise,
    reponse      boolean,
    primary key (identreprise, idprofil)
);

alter table reponse
    owner to postgres;

create table recrute
(
    idetudiant   integer not null,
    identreprise integer not null
        references entreprise,
    date         date,
    primary key (idetudiant, identreprise)
);

alter table recrute
    owner to postgres;

create table offre
(
    idoffre    serial
        primary key,
    nom        text not null,
    domaine    text not null,
    mission    text not null,
    nbetudiant integer,
    parcours   text not null,
    visible    boolean
);

alter table offre
    owner to postgres;

create table postule
(
    idetudiant serial,
    idoffre    integer not null
        references offre,
    date       date,
    primary key (idetudiant, idoffre)
);

alter table postule
    owner to postgres;

create table poste
(
    idoffre      serial
        references offre,
    identreprise serial
        references entreprise,
    primary key (identreprise, idoffre)
);

alter table poste
    owner to postgres;

create table notification
(
    idnotif    serial
        primary key,
    idetudiant integer,
    lu         boolean default false,
    date       timestamp,
    rappel     date
);

alter table notification
    owner to postgres;

create table etudiant
(
    idetudiant      serial
        primary key,
    nom             text       not null
        constraint etudiant_nom_check
            check (nom = upper(nom)),
    prenom          text       not null,
    datedenaissance date       not null
        constraint etudiant_datedenaissance_check
            check ((datedenaissance >= '1900-01-01'::date) AND (datedenaissance <= CURRENT_DATE)),
    adresse         text       not null,
    ville           text       not null,
    codepostal      varchar(5) not null
        constraint etudiant_codepostal_check
            check (length((codepostal)::text) = 5),
    anneeetude      integer    not null,
    formation       text       not null,
    email           text       not null
        constraint etudiant_email_check
            check (POSITION(('@'::text) IN (email)) > 0),
    motdepasse      text
        constraint etudiant_motdepasse_check
            check ((length(motdepasse) >= 8) AND (motdepasse ~ '[A-Z]'::text) AND (motdepasse ~ '[a-z]'::text) AND
                   (motdepasse ~ '[0-9]'::text) AND (motdepasse ~ '[!@#$%^&*()]'::text) AND
                   (NOT (motdepasse ~ '^(password|123456|admin)$'::text))),
    photo           varchar(255)
        constraint etudiant_photo_check
            check ((photo)::text ~ '.(png|jpeg|jpg)$'::text),
    ine             text       not null,
    typeentreprise  text,
    typemission     text,
    mobile          integer,
    actif           boolean,
    codemail        varchar
);

alter table etudiant
    owner to postgres;

create table cv
(
    id      serial
        primary key,
    chemin  varchar,
    contenu bytea
);

alter table cv
    owner to postgres;