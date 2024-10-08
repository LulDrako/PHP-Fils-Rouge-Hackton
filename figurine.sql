PGDMP                       |           figurine    16.0    16.0     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    24629    figurine    DATABASE     {   CREATE DATABASE figurine WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'French_France.1252';
    DROP DATABASE figurine;
                postgres    false            �            1259    24657    products    TABLE     �   CREATE TABLE public.products (
    id integer NOT NULL,
    product_name character varying(50) NOT NULL,
    description text,
    price numeric,
    stock integer NOT NULL,
    image_url character varying(255),
    category character varying(50)
);
    DROP TABLE public.products;
       public         heap    postgres    false            �            1259    24656    products_id_seq    SEQUENCE     �   CREATE SEQUENCE public.products_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.products_id_seq;
       public          postgres    false    218            �           0    0    products_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;
          public          postgres    false    217            �            1259    24647    users    TABLE     �   CREATE TABLE public.users (
    id integer NOT NULL,
    username character varying(50),
    password character varying(255),
    date_registered timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    24646    users_id_seq    SEQUENCE     �   CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    216            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    215            W           2604    24660    products id    DEFAULT     j   ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);
 :   ALTER TABLE public.products ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    217    218            U           2604    24650    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            �          0    24657    products 
   TABLE DATA           d   COPY public.products (id, product_name, description, price, stock, image_url, category) FROM stdin;
    public          postgres    false    218   �       �          0    24647    users 
   TABLE DATA           H   COPY public.users (id, username, password, date_registered) FROM stdin;
    public          postgres    false    216   =       �           0    0    products_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.products_id_seq', 41, true);
          public          postgres    false    217            �           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 16, true);
          public          postgres    false    215            ]           2606    24665    products products_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.products DROP CONSTRAINT products_pkey;
       public            postgres    false    218            Y           2606    24653    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    216            [           2606    24655    users users_username_key 
   CONSTRAINT     W   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_username_key UNIQUE (username);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_username_key;
       public            postgres    false    216            �   r  x��T�n�8|f�"O}�I��
�MܦI�F�MZ,`P"%ӲH�"�(���-}�/)�@�A�t(���a��/J��R\���_�8�ve���`jm۽Eh�\f�e�)وAiв��VV(�\;׌w(�A�0E� �Y�j9���6�ٮ;_�����ȅ � طԖծ���AW����r.:t'0�xHp�HF���$
�"�q�	%��L�(N)�0��9!0�K��<���L*�+��~��8Ͳ0�Q��q�U�e�Y}�жD#@�_ٰJt�Z�
δv�;F���0H�$>Ђp�:W+�-	Hw�B�o����
��2+�5���ř_y;��٨�rE��m��H�l�����H��U����ţWo����^u^%�ߒ��*�DG��S#:�L��i)�5?aT��s�� ��Qx��92�_���c�a�崵����W��OQJ%���Ha�:��R�|>�#&���\edOc��93��pQ27���l����+��=��o�|��$pvW�03=\Z��!��H�����gW�#���|����ƣ�A�����Ik4w�vh� ��Y���!�d|�<��W�mK4=�����
�wߺ������p��G�0�|?���?,�r��|f������4���j)�Cs0�/�7LU���X�O�ݸ�e(�;�5�<8�Vi����È�J���׺9녁I�&<�Y�&Y�f)����0�^�#�{=s�`[�@��s�w�]��!E8��^�8�Uo�!�A���Z���`��˶�� ���>_�9��<������e��[9�mr%Ñ���f�ld���;brX���@�H�p��f�Ƃ�c���S�5a�ZI�K��u �?����=>      �   W  x�e��z�:��1\E�6�@B`F��"����	bT��A��w��ҧk�x��� %�yi�Wܾ"��_�M��{�pA����tYt�����|m��i1����1CL�|C��L�L�B�ΰ�����;��n;����-t,ȃM��Z�DޯY�|{�l�Zn8��߼ab0��3�(�2�ms���,�����?4�x�~;
r���Z���8s�$�Է�����Ԡ�0б�A�j�̏���[cF%#��d۷N'��q!KEލ����,w���E�u��:b_��	!*U���$�.��#/띶��V��Yd�][r��:a������{V�\�ht���Iu���2%����&�%�Cވ���dW�ad�öJ���D�����ҁnuX,-��1|��I����0DDՕu)�xf���ʉ6�r��!��2�=�����t]Wd�½��å8eӿ�;@ 28U���y>>�|��k��≸��GLҺ�v���| $���[���Ͽ}���&%&b��T��j(�}���e��Ӣ^]C��Y��6Z_j'��l���爊*k�w��Õ����L�cT�TEDiӪ��H�یf��O���h7��X�hz&Q����.���6�y�>�H����gCB�r`@nh\E�R���y���8�/�iiR�9_�":�����c�����.��wϗ�$��o��`lBf�cQ%?��z�o�;߽Ǜ?Ϙ��q7zG`2�]O�-L�[�N-��k�fzЯ;g�k�7�}5^ 6����s��L�ɟo��N���F�� tE�v1HBڙgU�xzJ�&?��������_oHC !���PU�_��Y�     