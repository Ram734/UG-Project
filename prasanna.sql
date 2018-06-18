-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2018 at 05:29 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prasanna`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) NOT NULL,
  `comments` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `comments`) VALUES
('ram', 'good'),
('ram', 'fineeee'),
('yf57d75', 'uf7ft7');

-- --------------------------------------------------------

--
-- Table structure for table `symptom`
--

CREATE TABLE IF NOT EXISTS `symptom` (
  `sid` int(100) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `s1n` varchar(1000) NOT NULL,
  `s1m` varchar(1000) NOT NULL,
  `s2n` varchar(1000) NOT NULL,
  `s2m` varchar(1000) NOT NULL,
  `s3n` varchar(1000) NOT NULL,
  `s3m` varchar(1000) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `symptom`
--

INSERT INTO `symptom` (`sid`, `sname`, `description`, `s1n`, `s1m`, `s2n`, `s2m`, `s3n`, `s3m`) VALUES
(1, 'Cold & Flu', 'Runny or Stuffy nose,\r\nCongestion,\r\nSore throat,\r\nSlight body ache,\r\nSneezing,\r\nLow-grade fever,\r\nGenerally feeling unwell ', 'Honey,\r\nGarlic,\r\nOnion,\r\nPepper,\r\nGinger,\r\nMint', 'Gravol,\r\nContac,\r\nDolo cold,\r\nMaxiclear,\r\nTylenol', 'Coconut water,\r\nHoly basil,\r\nLadys finger,\r\nTurmeric powder,\r\nRice water,\r\nBasil leaves', 'Crocin max,\r\nAlka-Seltzer,\r\nAdvil(Cold & flu),\r\nPanadol,\r\nSambucol(Black elderberry),\r\nUmcka', 'Neuro Foundation(Salem),\r\nDr.Sudhakar ENT Care ceenter(Salem),\r\nSuraksha Hospital(Salem),\r\nSri Gokulam Hospital(Salem),\r\nJS Hospital(Salem),\r\nKauvery Hospital(Salem),\r\nSPMM Hospital(Salem),\r\nEMCH Speciality Hospital(Erode),\r\nApollo Loga Hospital(Karur)', 'Nurofen,\r\nEase a Cold,\r\nCodral Cold & flu,\r\nLemsip man,\r\nBenylin'),
(2, 'Headache', 'Dull,\r\nAching Headpain,\r\nSensation of tightness (or) pressure across your four head (or) on the sides and back of your head,\r\nTenderness on your scalp,neck and shoulder muscles', 'Cherries,\r\nCoffee,\r\nSalmon,\r\nWater melon,\r\nBanana', 'Nurofen,\r\nSyndol,\r\nExcedrin,\r\nAspirin,\r\nSolpadeine', 'Corn,\r\nSpinach,\r\nMillet,\r\nCoconut oil,\r\nOlive oil', 'Grand-pa,\r\nLenapain,\r\nHedex,\r\nMigraine,\r\nHylands', 'Neuro foundation(salem),\r\nSri Gokulam specialty Hospital(salem),\r\nManipal Hospitals(salem),\r\nJS Hospital(salem),\r\nEMCH(erode)', 'Fioricet,\r\nAleve,\r\nNaproxen,\r\nButalbital,\r\nBupap'),
(3, 'Eye Pain', 'Less vision,\r\nHeadache,\r\nForeign body sensation,\r\nExtreme light sensitivity,\r\nTearing,\r\nPain in or around the eye area', 'Carrot,\r\nCucumber,\r\nBitter guard,\r\nKiwi,\r\nPapaya', 'Ibluprofen,\r\nPain-o-soma,\r\nTop dol,\r\nTapalee 100,\r\nClean eye(drops)', 'Dragon fruit,\r\nCherry tomato,\r\nMandarine orange,\r\nBlue berry', 'Murine hay fever(drops),\r\nGenteal(drops),\r\nBlackmores,\r\nI.caps,\r\nAcnecide(gel)', 'Arvind Eye Care system(Madurai),\r\nSankar Nethrayaya(chennai),\r\nVasan eye care(chennai),\r\nRK eye center(chennai),\r\nRajan eye care hospital(chennai),\r\nLotus eye hospital and institute(coimbatore),\r\nManipal hospital(salem)', 'Lofeman Ophthalmic,\r\nDurezol Ophthalmic,\r\nNeuanac Ophthalmic,\r\nHevro Ophthalmic,\r\nProlensa Ophthalmic'),
(4, 'Teeth pain', 'Swelling around the tooth,\r\nFever or headache,\r\nFoul-tasting drainage from the infected tooth', 'Garlic,\r\nonion,\r\nClove oil,\r\nSalt,\r\npotato', 'Diclofenac,\r\nCamilia,\r\nSanid,\r\nNapauetamom,\r\nSimilasan', 'Eugenol oil,\r\nGoose berry,\r\nGuava leaves,\r\nGinger,\r\nCucumber', 'Orajel(gel),\r\nAnbesol(gel),\r\nOrasore(gel),\r\nVahola(drops),\r\nBayer', 'Kamala Hospitals(Tuticorin),\r\nAVM Hospital(Tuticorin),\r\nSBS Hospital(Chennai),\r\nGlobal Hospital(Chennai),\r\nChristian Medical College(Vellore),\r\nKMCH(Coimbatore)\r\n\r\n', 'Aleve Oral Gabapentin 300mg,\r\nEquate Pain Relief Aspirin Coated Tablets(325 mg),\r\nBiofreeze Pain Relief gel,\r\nAleve Easy Open Athritis Cap Caplet(Pain Reliever)'),
(5, 'Cough', 'A runny or stuffy nose,\r\nA feeling of liquid running down the back of your throat,\r\nFrequent Throat clearing and sore throat,\r\nHoarseness,\r\nWheezing and shortness of breadth,\r\nHeartburn (or) a sour taste in your mouth', 'Salt water gargle,\r\nAlmonds,\r\nMulethi powder,\r\nHoney and cinnamon,\r\nLemon', 'Alpha-cc,\r\nKof Aid(baksonsa),\r\nRespivita,\r\nRespirowin,\r\nSimvastatin', 'Herbal,\r\nBlack pepper,\r\nTurmeric,\r\nGarlic,\r\nEucalyptus oil,\r\nFlax seeds', 'Septec,\r\nBenylin,\r\nBenadryl Syrup,\r\nTylenol,\r\nNeo-codion', 'Hospital for ENT(salem),\r\nNeuro Foundation(salem),\r\nDr Batras Homeopathy clinic(salem),\r\nSPMM Hospital(salem),\r\nMohanraj children Hospital(salem),\r\nPalaniyandi Hospital(salem)', 'Dilvas 2.5mg Tablet,\r\nShrikantha Vati,\r\nAmbroxal with Guaiphensan 8 Terbutalin(Syrup),\r\nAdulse,\r\nTulshin'),
(6, 'Knee pain', 'Swelling and stiffness,\r\nRedness and warmth to the touch, Weakness (or) instability, Popping (or) crunching noises, Inability to fully straighten the knee', 'Turmeric,\r\nGinger,\r\nLemon, \r\nHoney,\r\nApple cider vinegar', 'Glucozone,\r\nSharangdhar arco(oinment), \r\nCart fit,\r\nGlucosamine chondrotin complex, Aflexin Glukozamina', 'Olive oil, Fenugreek powder, Papaya seeds, Garlic cloves, onions', 'Osteoarth,\r\nTraumeel, \r\nZeel,\r\nOstolief Nutra,\r\nPuritans', 'London Ortho Specialty Hospital(Salem),\r\nTosh Hospital(Chennai),\r\nOrtho-One Orthopaedic Specialty Center(Coonoor & Coimbatore),\r\nSoundarapandian Bone and Joint Hospital(Madurai),\r\nDevadoss Orthopaedic Hospital(Madurai),\r\nDr.Isaac Bone & Joint Specialty Hospital(Marthandam),\r\nChristudas Orthopaedic Specialty Hospital(Chennai)  ', 'Swisse,\r\nActipatch,\r\nNoltarol(Gel),\r\nJoint Care,\r\nAnandin(200 mg)'),
(7, 'Ear pain', 'Earache,\r\nA feeling of fullness in the ear,\r\nNausea,\r\nMuffled hearing, Ear drainage', 'Onions,\r\nGinger,\r\nGarlic, Peppermints,\r\nOlive oil', 'Hylands(earache), Polysporin(ear drops), Earclear(ear drops),\r\nTinnitus, Canclibiotic(ear drops)', 'Hot water,\r\nBasil leaves, Licorice,\r\nSteam,\r\nMallries Flower oil', 'Magnilite, Auralgan(drops), Weleda chamomilla 30,\r\nSimilasan(drops), Walgreens(drops)', 'Vikram ENT Hospital & Research Institute(Coimbatore),\r\nSri ENT Hospital(Madurai),\r\nMCV Memorial ENT Hospital(Pollachi),\r\nRoyal Pearl Hospital(Trichirappalli),\r\nVishnu ENT Hospital(Coimbatore),\r\nGuhan ENT Hospital(Erode)', 'Adderall,\r\nCelema,\r\nCymbalta,\r\nHydrocodone,\r\nLisinopril,\r\nMobic'),
(8, 'Tuberculosis', 'Pain can occur while breathing, cough can be chronic or with blood, \r\nFever,\r\nnight sweats,\r\nfatigue,\r\nmalaise,\r\nloss of appettie, Severe unintentional weight loss', 'Gooseberry,\r\nOrange,\r\nMint,\r\nPineapple,\r\nBanana', 'Isoniazid, Ethambutol, Rifampin,\r\nAmikin,\r\nAvelox', 'Garlic,\r\nWalnuts,\r\nCustard apple, Apricots,\r\nGrains', 'Pyrazinamide, Cipro,\r\nRifater, Levofloxacin, Levaquin', 'Shree Meladi Maa TB Hospital(Gujarat),\r\nNew Delhi Tuberculosis Center(New Delhi),\r\nStateTb Cell(Chandigrah),\r\nTB Hospital(New Delhi),\r\nTB Center(Delhi),\r\nDistrict TB Center(Gujarat)', 'Oflox(100 DT),\r\nAnti Tuberclosis Afenolol Tablet,\r\nMoxfit CV 625 tablet,\r\nEthionamide Tablet(250 mg),\r\nPyrazinamide Tablet'),
(9, 'Kidney Stone', 'Pain areas:\r\nIn the back or side part of the body, pain types:can be severe,sharp or sudden in abdomen pain,\r\ncircumstances:can occur during urination Sweating,nausea or vomiting Blood in urine or frequent urination', 'Grapes,\r\nLemon juice,\r\nOlive oil,\r\nRaw apple cider vinegar, Pomegranate', 'Stonil,\r\nBerberis Pentarkan, Stonoff, Sharangdhar, urolith-S', 'Dandelion root, Horsetail,\r\nCelery, \r\nBasil, \r\nDrink plenty of water', 'Systome,\r\nStobye,\r\nRenelix,\r\nKrushtone,\r\nClear stone(drops), Hit to stone', 'TNURC Kindney Stone Clinic(Chennai),\r\nCoimbatore Kidney Center(Coimbatore),\r\nBright Kidney Specialty Hospital(Madurai),\r\nKalyani Kidney Care Center(Erode),\r\nMG Stone Kidney Stone Specialty Center(Chennai)', 'Lasertrate(1100 mg/375 mg),\r\nSton-I(1100 mg/375 mg),\r\nKayloricl(100 mg),\r\nEstinol(100mg),\r\nAlgor(100 mg),\r\nAllgout(100 mg)'),
(10, 'Allergy', 'Sneezing and an itchy,\r\nRunny or blocked nose (allergic rhinitis), \r\nWatering eyes (conjunctivitis), Wheezing, \r\nChest tightness, Shortness of breath and a cough a raised, \r\nItchy, \r\nRed rash (hives) swollen lips, tongue, eyes or face', 'Petroleum jelly, Strawberry,\r\nEgg,\r\nFish,\r\nGround nut,\r\nMilk', 'Benadryl(syrup), Allergy relief, Zyrtec,\r\nReactine,\r\nAllegra allergy', 'Wheat,\r\nPineapple, Cherries,\r\nNuts,\r\nOlive oil,\r\nOnion,\r\nLemon juice', 'Nasocart allergy(spray), Equate suphedrine PE,\r\nGenexa allergy-D, Alavert,\r\nMucinex allergy', 'Anna nagar allergy and asthma clinic(chennai),\r\nDr Sivakannu allergy clinic(Tiruchirapalli),\r\nAsthma and allergy research center(chennai),\r\nDr Mehtas Hospital(chennai)', 'Montemol-L Anti Allergy Tablet,\r\nDesloratadine Tablet,\r\nFexofenadine Tablet(180 mg),\r\nZallmonte Anti Allergic Tablet,\r\nMontic Tablet');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pname`, `dob`, `age`, `blood`, `gender`, `mobile`, `address`, `password`) VALUES
(1, 'Ram', '1997-02-20', '21', 'AB+ve', 'male', '8903922191', 'Four roads,Salem', '8903922191'),
(2, 'Ramya', '1997-06-16', '20', 'O+ve', 'Female', '8695077926', 'Karumapurathanur,Sangakiri(W),Salem ', '8695077926'),
(3, 'Preetha', '1997-10-09', '20', 'B+ve', 'female', '9751056765', 'Mallur,Salem', '9751056765');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
