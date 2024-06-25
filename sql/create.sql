-- Active: 1718620152358@@127.0.0.1@3306@itineraryplanner
CREATE TABLE USER (
    USER_ID INT PRIMARY KEY AUTO_INCREMENT,
    USERNAME VARCHAR(255),
    PASSWORD VARCHAR(255),
    EMAIL VARCHAR(255)
);

/

CREATE TABLE ITINERARYPLANNER (
    ITINERARY_ID INT PRIMARY KEY AUTO_INCREMENT,
    USER_ID INT,
    ITINERARY_NAME VARCHAR(255),
    START_DATE DATE,
    END_DATE DATE,
    FOREIGN KEY (USER_ID) REFERENCES USER(USER_ID)
);

/

CREATE TABLE TRANSPORTATION (
    TRANSPORTATION_ID INT PRIMARY KEY AUTO_INCREMENT,
    TYPE_OF_TRANSPORTATION VARCHAR(255),
    PRICE INT,
    START_LEAVE DATE,
    LOCATION_ID INT,
    END_LEAVE DATE,
    ITINERARY_ID INT,
    FOREIGN KEY (ITINERARY_ID) REFERENCES ITINERARYPLANNER(ITINERARY_ID),
    FOREIGN KEY (LOCATION_ID) REFERENCES LOCATION(LOCATION_ID)
);

/

CREATE TABLE LOCATION (
    LOCATION_ID INT PRIMARY KEY AUTO_INCREMENT,
    LOCATION_NAME VARCHAR(255),
    ADDRESS VARCHAR(255),
    CITY VARCHAR(255),
    COUNTRY VARCHAR(255)
);

/

CREATE TABLE ACTIVITY (
    ACTIVITY_ID INT PRIMARY KEY AUTO_INCREMENT,
    ACTIVITY_NAME VARCHAR(255),
    LOCATION_ID INT,
    ITINERARY_ID INT,
    TIME_START TIME,
    FOREIGN KEY (ITINERARY_ID) REFERENCES ITINERARYPLANNER(ITINERARY_ID),
    FOREIGN KEY (LOCATION_ID) REFERENCES LOCATION(LOCATION_ID)
) CREATE TABLE ACTIVITY_CATEGORY (
    CATEGORY_ID INT PRIMARY KEY AUTO_INCREMENT,
    CATEGORY_NAME VARCHAR(255),
    ACTIVITY_ID INT,
    FOREIGN KEY (ACTIVITY_ID) REFERENCES ACTIVITY(ACTIVITY_ID)
);

/

CREATE TABLE CATEGORY_ASSIGNMENT (
    CATEGORY_ASSIGNMENT_ID INT PRIMARY KEY AUTO_INCREMENT,
    CATEGORY_ID INT,
    ACTIVITY_ID INT,
    FOREIGN KEY (CATEGORY_ID) REFERENCES ACTIVITY_CATEGORY(CATEGORY_ID),
    FOREIGN KEY (ACTIVITY_ID) REFERENCES ACTIVITY(ACTIVITY_ID)
);

/

CREATE TABLE ACCOMMODATION (
    ACCOMMODATION_ID INT PRIMARY KEY AUTO_INCREMENT,
    ITINERARY_ID INT,
    LOCATION_ID INT,
    ACCOMMODATION_NAME VARCHAR(255),
    ADDRESS VARCHAR(255),
    CHECKIN_DATE DATE,
    CHECKOUT_DATE DATE,
    FOREIGN KEY (ITINERARY_ID) REFERENCES ITINERARYPLANNER(ITINERARY_ID),
    FOREIGN KEY (LOCATION_ID) REFERENCES LOCATION(LOCATION_ID)
);

-- create table