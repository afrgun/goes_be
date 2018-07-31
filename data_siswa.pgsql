--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.13
-- Dumped by pg_dump version 9.5.13

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: data_siswa; Type: TABLE; Schema: public; Owner: afrgun
--

CREATE TABLE public.data_siswa (
    kd_siswa character(6) NOT NULL,
    nm_siswa character varying,
    tgl_lahir character varying,
    thn_masuk character varying,
    jk character varying,
    nm_ortu character varying,
    alamat character varying,
    no_telp character varying,
    pass_siswa character varying
);


ALTER TABLE public.data_siswa OWNER TO afrgun;

--
-- Data for Name: data_siswa; Type: TABLE DATA; Schema: public; Owner: afrgun
--

COPY public.data_siswa (kd_siswa, nm_siswa, tgl_lahir, thn_masuk, jk, nm_ortu, alamat, no_telp, pass_siswa) FROM stdin;
416102	Alans	05/05/2005	2015	L	Lasmi	Jalan Depok raya timur, no 20	021098230	123456
415102	Wahyu	01/04/2009	2015	L	Wahyani	Kp. Pabuaran rt 03/003, kel. pabuaran, kec. bojonggede. kab. bogor	082314981	123456
\.


--
-- Name: siswa_pkey; Type: CONSTRAINT; Schema: public; Owner: afrgun
--

ALTER TABLE ONLY public.data_siswa
    ADD CONSTRAINT siswa_pkey PRIMARY KEY (kd_siswa);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

