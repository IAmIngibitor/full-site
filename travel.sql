PGDMP         &                |            travel    14.5    15.3     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16384    travel    DATABASE     h   CREATE DATABASE travel WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'C';
    DROP DATABASE travel;
                postgres    false                        2615    2200    public    SCHEMA     2   -- *not* creating schema, since initdb creates it
 2   -- *not* dropping schema, since initdb creates it
                postgres    false            �           0    0    SCHEMA public    ACL     Q   REVOKE USAGE ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO PUBLIC;
                   postgres    false    4            �            1259    16401    remarks    TABLE     p   CREATE TABLE public.remarks (
    "ID_user" bigint NOT NULL,
    topic text NOT NULL,
    text text NOT NULL
);
    DROP TABLE public.remarks;
       public         heap    postgres    false    4            �            1259    16395    users    TABLE     �   CREATE TABLE public.users (
    "ID" integer NOT NULL,
    "Name" character varying(30) NOT NULL,
    "Login" character varying(20) NOT NULL,
    "Pass" character varying(20) NOT NULL
);
    DROP TABLE public.users;
       public         heap    postgres    false    4            �            1259    16394    users_ID_seq    SEQUENCE     �   CREATE SEQUENCE public."users_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public."users_ID_seq";
       public          postgres    false    4    210            �           0    0    users_ID_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public."users_ID_seq" OWNED BY public.users."ID";
          public          postgres    false    209            `           2604    16398    users ID    DEFAULT     h   ALTER TABLE ONLY public.users ALTER COLUMN "ID" SET DEFAULT nextval('public."users_ID_seq"'::regclass);
 9   ALTER TABLE public.users ALTER COLUMN "ID" DROP DEFAULT;
       public          postgres    false    209    210    210            �          0    16401    remarks 
   TABLE DATA           9   COPY public.remarks ("ID_user", topic, text) FROM stdin;
    public          postgres    false    211          �          0    16395    users 
   TABLE DATA           >   COPY public.users ("ID", "Name", "Login", "Pass") FROM stdin;
    public          postgres    false    210   n       �           0    0    users_ID_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public."users_ID_seq"', 2, true);
          public          postgres    false    209            b           2606    16400    users users_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY ("ID");
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    210            �   O   x���	� ����@�>cv�#D3� ���~��gr����ɞ��*P���n���u.2/M��`�hf?v�+�      �   =   x�3�0�¦.���,K̋744�4.#��/l��t��3 ��(��Ȉ��b���� ���     