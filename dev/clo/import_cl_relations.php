<?php header("Content-type: text/plain");
ini_set("display_errors", "1"); 
ini_set("display_startup_errors", "1"); 
error_reporting(E_ALL);

$strInput = 'abdominal aorta, endothelial cell	add	1.25	CL:0000115	endothelial cell	2	UBERON:0001516	abdominal aorta															
acetabulum cell	add	1.25	CL:0000000	cell	2	UBERON:0001269	acetabular part of hip bone															
adrenal cell	just cell	1.25	CL:0000000	cell	0.75	UBERON:0001235	adrenal cortex															
adrenal cortex cell	use cortical cell of adrenal gland "CL:0002097"	1.44444	UBERON:0001235	adrenal cortex	2	CL:0000000	cell															
adrenal gland (cortex), epithelial cell	use above	1.18367	UBERON:0001235	adrenal cortex	1.25	CL:0000066	epithelial cell	0.75	UBERON:0000446	septum of telencephalon												
adrenal gland (metastasis), epithelial cell	cancer, use above	1.08163	CL:0000066	epithelial cell	1.16	UBERON:0002369	adrenal gland	0.75	UBERON:0000446	septum of telencephalon												
adrenal gland, endothelial cell	add	1.25	CL:0000115	endothelial cell	2	UBERON:0002369	adrenal gland															
adrenal gland, epithelial cell	add	1.25	CL:0000066	epithelial cell	2	UBERON:0002369	adrenal gland															
adrenal gland, polygonal cell	shape, polygonal is  worm cell, add as type of epithelial cell? PMID: 16923381	1.25	CL:0000398	polygonal cell	2	UBERON:0002369	adrenal gland															
amnion cell	add	1.25	CL:0000000	cell	2	UBERON:0000305	amnion															
anterior pituitary, epithelial cell	add	1.25	CL:0000066	epithelial cell	1.25	UBERON:0000007	pituitary gland	0.444444	UBERON:0002607	superior rostral sulcus												
aorta cell	just cell	1.25	CL:0000000	cell	2	UBERON:0000947	aorta															
aorta, endothelium cell	add	1.44444	UBERON:0004851	aorta endothelium	2	CL:0000000	cell															
aorta, fibroblast cell	add	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000947	aorta												
aorta, smooth muscle, fibroblast cell	more than one cell type	1.36	CL:0000192	smooth muscle cell	1.25	CL:0000057	fibroblast	2	UBERON:0000947	aorta												
aorta, thoracic cell	just cell	1.44444	UBERON:0001515	thoracic aorta	2	CL:0000000	cell															
areolar and adipose cell	more than one cell type, add areolar	1.0625	CL:0000000	cell	0.611111	UBERON:0001013	adipose tissue	0.3125	UBERON:0001035	socket												
ascites (metastasis) cell	just cell	1.04	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon															
ascites (metastasis), bipolar, slightly refractile, fibroblast-like cell	cancer, add using fibroblast	1.01	CL:0000000	cell	1.01235	CL:0000057	fibroblast	0.5625	UBERON:0000446	septum of telencephalon	0.527778	CL:0000103	bipolar neuron	0.373333	CL:0000265	anterior like cell						
ascites (metastasis), bipolar, slightly refractile, fibroblast-like cell	same as above 	1.01235	CL:0000000	cell	0.5625	UBERON:0000446	septum of telencephalon	0.527778	CL:0000103	bipolar neuron												
ascites (metastasis), epithelial cell	add 	1.11111	CL:0000066	epithelial cell	0.75	UBERON:0000446	septum of telencephalon															
ascites and peritoneum (metastasis), epithelial cell	two diff tissues?	1.0625	CL:0000066	epithelial cell	1.02778	UBERON:0002358	peritoneum	0.66	UBERON:0000446	septum of telencephalon	0.3125	UBERON:0001035	socket									
ascites, B lymphoblast, lymphoblast cell	use B cell	1.25	CL:0000236	B cell	0.625	CL:0000229	lymphoblast															
ascites, B lymphoblast, suspension cell	suspension refers to culture method	1.16	CL:0000236	B cell	0.555556	CL:0000229	lymphoblast															
ascites, B lymphocyte, lymphoblast cell	same as 24	1.16	CL:0000236	B cell	1.11111	CL:0000542	lymphocyte	0.625	CL:0000229	lymphoblast												
ascites, lymphoblast cell	use lymphoblast	1.11111	CL:0000000	cell	0.625	CL:0000229	lymphoblast															
ascitic fluid cell	just cell	1.11111	CL:0000000	cell	0.75	UBERON:0000038	follicular fluid															
axilla lymph node cell	just cell	1.25	UBERON:0000029	lymph node	1.25	CL:0000000	cell															
axillary lymph node, vascular epithelium, cobblestone;   endothelial cell	add using endothelial cel	1.14062	UBERON:0001097	axillary lymph node	1.16	CL:0000115	endothelial cell	1.11111	UBERON:0000483	epithelium	0.75	UBERON:0002049	vasculature									
axillary lymph node, vascular epithelium, epithelial cell	add	1.18367	UBERON:0001097	axillary lymph node	1.25	CL:0000066	epithelial cell	1.25	UBERON:0000483	epithelium	0.75	UBERON:0002049	vasculature									
axillary lymph node, vascular epithelium, spindle cell;   epithelial cell	same as above	1.14062	UBERON:0001097	axillary lymph node	1.16	CL:0000066	epithelial cell	1.11111	UBERON:0000483	epithelium	0.75	UBERON:0002049	vasculature	0.75	UBERON:0003718	muscle spindle						
B cell cell	use B cell	2	CL:0000236	B cell																		
B lymphoblast, lymphoblast cell	use B cell	1.44444	CL:0000236	B cell	1	CL:0000229	lymphoblast															
B lymphocyte, lymphoblast cell	use B cell	1.25	CL:0000236	B cell	1.25	CL:0000542	lymphocyte	1	CL:0000229	lymphoblast												
BHK-21 transformed, fibroblast cell	use fibroblast	1.04	CL:0000000	cell	1.0625	CL:0000057	fibroblast															
BHK-21 transformed, fibroblast cell	use fibroblast	1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast															
bile duct cell	just cell	1.44444	UBERON:0002394	bile duct	2	CL:0000000	cell															
bladder cell	just cell	1.25	CL:0000000	cell	2	UBERON:0001255	urinary bladder															
bladder, epithelial cell	urothelial cell?, if not add	1.44444	CL:0000066	epithelial cell	2	UBERON:0001255	urinary bladder															
blood cell	use blood cell	2	CL:0000081	blood cell																		
bone cell	just cell	1.25	CL:0000000	cell	2	UBERON:0001474	bone															
bone (calvaria), fibroblast cell	add	1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0001474	bone	1.11111	UBERON:0004339	calvaria	0.75	UBERON:0000446	septum of telencephalon						
bone (metastasis), epithelial cell	cancer, add	1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0001474	bone	0.75	UBERON:0000446	septum of telencephalon												
bone (metastasis), fibroblast cell	use 43	1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0001474	bone	0.75	UBERON:0000446	septum of telencephalon									
bone marrow cell	use bone marrow cell	1.44444	UBERON:0002371	bone marrow	2	CL:0000000	cell															
bone marrow (metastasis) cell	cancer, above	1.11111	UBERON:0002371	bone marrow	1.0625	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon												
bone marrow (metastasis), epithelial cell	add	1.08163	CL:0000066	epithelial cell	1.16	UBERON:0002371	bone marrow	0.75	UBERON:0000446	septum of telencephalon												
bone marrow (metastasis), fibroblast cell	add	1.08163	UBERON:0002371	bone marrow	1.04	CL:0000000	cell	1.0625	CL:0000057	fibroblast	0.75	UBERON:0000446	septum of telencephalon									
bone marrow (metastasis), neuroblast cell	add?	1.08163	UBERON:0002371	bone marrow	1.04	CL:0000000	cell	1.0625	CL:0000031	neuroblast	0.75	UBERON:0000446	septum of telencephalon									
bone marrow, B lymphocyte, lymphoblast cell	add	1.11111	CL:0000236	B cell	1.25	UBERON:0002371	bone marrow	1.25	CL:0000542	lymphocyte	1	CL:0000229	lymphoblast									
bone marrow, epithelial cell	use 48	1.25	CL:0000066	epithelial cell	2	UBERON:0002371	bone marrow															
bone marrow, erythroblast, lymphoblast cell	more than one cell type, use erythroblast, lymphocyte	1.16	UBERON:0002371	bone marrow	1.11111	CL:0000000	cell	1.25	CL:0000765	erythroblast	1	CL:0000229	lymphoblast									
bone marrow, fetal cell	add-maybe	1.25	UBERON:0002371	bone marrow	1.25	CL:0000000	cell	0.75	UBERON:0005630	fetal membrane												
bone marrow, fetal, epithelial cell	add-maybe	1.16	CL:0000066	epithelial cell	1.44444	UBERON:0002371	bone marrow	0.75	UBERON:0005630	fetal membrane												
bone marrow, fibroblast cell	use 43	1.25	UBERON:0002371	bone marrow	1.25	CL:0000000	cell	2	CL:0000057	fibroblast												
bone marrow, lymphoblast cell	add lymphocyte	1.25	UBERON:0002371	bone marrow	1.25	CL:0000000	cell	1	CL:0000229	lymphoblast												
bone marrow, macrophage cell	add	1.25	UBERON:0002371	bone marrow	1.25	CL:0000000	cell	2	CL:0000235	macrophage												
bone marrow, mast cells cell	add	1.25	CL:0000097	mast cell	2	UBERON:0002371	bone marrow															
bone marrow, monocyte cell	add	1.25	UBERON:0002371	bone marrow	1.25	CL:0000000	cell	2	CL:0000576	monocyte												
bone marrow, myeloblast cell	add	1.25	UBERON:0002371	bone marrow	1.25	CL:0000000	cell	2	CL:0000835	myeloblast												
bone marrow, stem cell cell	add	1.25	CL:0000034	stem cell	2	UBERON:0002371	bone marrow															
bone marrow, stromal cells cell	add	1.25	CL:0000499	stromal cell	2	UBERON:0002371	bone marrow															
bone, connective tissue, fibroblast cell	use 45	1.16	UBERON:0002384	connective tissue	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0001474	bone									
bone, epithelial cell	use 44	1.44444	CL:0000066	epithelial cell	2	UBERON:0001474	bone															
bone, fibroblast cell	use 43	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0001474	bone												
bone, mixed cell	more than one cell type	1.11111	CL:0000000	cell	1.25	UBERON:0001474	bone	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
bone, mixed, fibroblast and epithelial-like cell	more than one cell type	1.08163	CL:0000066	epithelial cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0001474	bone	0.444444	CL:0000265	anterior like cell	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure			
bone, mixed, fibroblast and epithelial-like cell	same as above	1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0001474	bone	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure						
bone, osteoblast cell	use osteoblast	1.11111	CL:0000000	cell	1.25	CL:0000062	osteoblast	2	UBERON:0001474	bone												
bone, pelvis (metastasis), epithelial cell	cancer, add	1.08163	CL:0000066	epithelial cell	1.04	UBERON:0001474	bone	1.0625	UBERON:0002355	pelvis	0.75	UBERON:0000446	septum of telencephalon									
bone, transformed cell	cancer, just cell	1.11111	CL:0000000	cell	1.25	UBERON:0001474	bone															
brain cell	just cell	1.25	CL:0000000	cell	2	UBERON:0000955	brain															
brain (cerebellum), fibroblast cell	add	1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0000955	brain	1.11111	UBERON:0002037	cerebellum	0.75	UBERON:0000446	septum of telencephalon						
brain (cerebellum), neuronal cell	add child to CNS neuron	1.02778	CL:0000000	cell	1.04	CL:0000540	neuron	1.0625	UBERON:0000955	brain	1.11111	UBERON:0002037	cerebellum	0.75	UBERON:0000446	septum of telencephalon						
brain (cerebellum), polygonal cell	shape	1.11111	CL:0000398	polygonal cell	1.0625	UBERON:0000955	brain	1.11111	UBERON:0002037	cerebellum	0.75	UBERON:0000446	septum of telencephalon									
brain (cerebellum), spheroid cell	shape	1.02778	CL:0000000	cell	1.04	UBERON:0000955	brain	1.0625	UBERON:0002037	cerebellum	0.75	UBERON:0000446	septum of telencephalon									
brain (cerebral cortex), endothelial cell	add	1.08163	CL:0000115	endothelial cell	1.16	UBERON:0000956	cerebral cortex	1.11111	UBERON:0000955	brain	0.75	UBERON:0000446	septum of telencephalon									
brain (choroid plexus) cell	just cell	1.11111	UBERON:0001886	choroid plexus	1.0625	CL:0000000	cell	1.11111	UBERON:0000955	brain	0.75	UBERON:0000446	septum of telencephalon									
brain (cortex), fibroblast cell	add	1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0000955	brain	1.11111	UBERON:0001851	cortex	0.75	UBERON:0000446	septum of telencephalon						
brain (diencephalon), fibroblast cell	add	1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0000955	brain	1.11111	UBERON:0001894	diencephalon	0.75	UBERON:0000446	septum of telencephalon						
brain (metastasis) cell	just cell	1.04	CL:0000000	cell	1.0625	UBERON:0000955	brain	0.75	UBERON:0000446	septum of telencephalon												
brain (metastasis), epithelial cell	add	1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0000955	brain	0.75	UBERON:0000446	septum of telencephalon												
brain, astrocyte, glial, astrocyte cell	use astrocyte	1.25	CL:0000125	glial cell	1.25	CL:0000127	astrocyte	2	UBERON:0000955	brain												
brain, astrocytic cell	above	1.11111	CL:0000000	cell	1.25	CL:0000127	astrocyte	2	UBERON:0000955	brain												
brain, astroglia, fibroblast cell	more than one cell type	1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0000955	brain												
brain, cerebral ganglion, dendritic cell	use ganglion	1.16	CL:0000451	dendritic cell	1.11111	UBERON:0000045	ganglion	1.25	UBERON:0000955	brain	0.75	UBERON:0000322	cerebral lobe									
brain, cortical neuron, neuronal cell	add to cns neuron	1.0625	CL:0000000	cell	1.11111	CL:0000540	neuron	1.25	UBERON:0000955	brain	0.75	UBERON:0001439	compact bone									
brain, embryonic cell	just cell	1.11111	CL:0000000	cell	1.25	UBERON:0000955	brain	0.75	UBERON:0000068	embryo stage												
brain, epithelial cell	use 83	1.44444	CL:0000066	epithelial cell	2	UBERON:0000955	brain															
brain, fetal cell	just cell	1.11111	CL:0000000	cell	1.25	UBERON:0000955	brain	0.75	UBERON:0005630	fetal membrane												
brain, fibroblast cell	add	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000955	brain												
brain, flat; round cell	shape	1.0625	CL:0000000	cell	1.11111	UBERON:0000955	brain	0.75	UBERON:0002502	round window												
brain, glial cell	use glial cell	1.44444	CL:0000125	glial cell	2	UBERON:0000955	brain															
brain, glial cell, fibroblast cell	more than one cell type	1.25	CL:0000125	glial cell	1.25	CL:0000057	fibroblast	2	UBERON:0000955	brain												
brain, microglia/macrophage, macrophage cell	use microglial	1.04	CL:0000000	cell	1.0625	CL:0000129	microglial cell	1.11111	CL:0000235	macrophage	1.25	UBERON:0000955	brain									
brain, mixed cell	more than one cell type	1.11111	CL:0000000	cell	1.25	UBERON:0000955	brain	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
brain, neuroblast, fibroblast cell	more than one cell type	1.0625	CL:0000000	cell	1.11111	CL:0000031	neuroblast	1.25	CL:0000057	fibroblast	2	UBERON:0000955	brain									
brain, neuroblast, neuroblast cell	neuroblast	1.11111	CL:0000000	cell	1.25	CL:0000031	neuroblast	2	UBERON:0000955	brain												
brain, neuroblast, neuronal and   amoeboid   stem cells cell	more than one cell type	1.18367	CL:0000047	neuronal stem cell	1.0625	CL:0000031	neuroblast	1.11111	UBERON:0000955	brain	0.75	CL:0000732	amoeboid cell	0.3125	UBERON:0001035	socket						
brain, neuron, mixed cell	more than one cell type	1.0625	CL:0000000	cell	1.11111	CL:0000540	neuron	1.25	UBERON:0000955	brain	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure									
brain, polygonal cell	shape	1.44444	CL:0000398	polygonal cell	2	UBERON:0000955	brain															
breast cell	just cell	1.25	CL:0000000	cell	2	UBERON:0000310	breast															
breast (nipple) cell	just cell	1.04	CL:0000000	cell	1.0625	UBERON:0000310	breast	1.11111	UBERON:0002030	nipple	0.75	UBERON:0000446	septum of telencephalon									
breast, epithelial cell	use mammary epithelial cell	1.44444	CL:0000066	epithelial cell	2	UBERON:0000310	breast															
breast, epithelium cell	use above	1.11111	CL:0000000	cell	1.25	UBERON:0000310	breast	2	UBERON:0000483	epithelium												
bronchus, epithelial cell	use bronchial epithelail cell	1.44444	CL:0000066	epithelial cell	2	UBERON:0002185	bronchus															
bursa, lymphoblast cell	B cell from chicken	1.11111	CL:0000000	cell	1.25	UBERON:0003668	synovial bursa	1	CL:0000229	lymphoblast												
carp epidermal cell	epidermal cell from carp	1.44444	CL:0000362	epidermal cell																		
cartilage, embryonic cell	just cell	1.11111	CL:0000000	cell	1.25	UBERON:0002418	cartilage	0.75	UBERON:0000068	embryo stage												
cassette exchange for double lox targeting, spherical colony cell	OBI	1.01235	CL:0000000	cell	0.348958	UBERON:0000049	spherical lensed eye	0.220408	CL:0000050	megakaryocyte erythroid progenitor cell	0.227778	CL:0000809	double-positive, alpha-beta thymocyte	0.186667	UBERON:0000171	respiration organ	0.140625	grouping_class-Subset consisting of classes creating for grouping purposes				
caudal fin, fibroblast cell	add	1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0002534	fin	0.75	UBERON:0000936	posterior commissure									
caudal trunk, fibroblast cell	add	1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0002100	trunk	0.75	UBERON:0000936	posterior commissure									
cecum, epithelial cell	add	1.44444	CL:0000066	epithelial cell	2	UBERON:0001153	cecum															
central nervous system, neuronal cell	use CNS neuron	1.36	UBERON:0001017	central nervous system	1.25	CL:0000000	cell	2	CL:0000540	neuron												
cervical lymph node (metastasis), mixed cell	more than one cell type	1.14062	UBERON:0002429	cervical lymph node	1.04	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure									
cervical lymph node, fibroblast cell	add	1.36	UBERON:0002429	cervical lymph node	1.25	CL:0000000	cell	2	CL:0000057	fibroblast												
cervical lymph node, single spherical or   small clusters cell	shape	1.11111	UBERON:0002429	cervical lymph node	1.02778	CL:0000000	cell	0.54	UBERON:0000477	anatomical cluster	0.5625	UBERON:0002108	small intestine	0.444444	CL:0000226	single nucleate cell	0.444444	UBERON:0000049	spherical lensed eye	0.444444	UBERON:0004708	limb/fin
cervix cell	just cell	1.25	CL:0000000	cell	2	UBERON:0000002	uterine cervix															
cervix (metastasis) cell	just cell	1.04	CL:0000000	cell	1.0625	UBERON:0000002	uterine cervix	0.75	UBERON:0000446	septum of telencephalon												
cervix, epithelial cell	add	1.44444	CL:0000066	epithelial cell	2	UBERON:0000002	uterine cervix															
chorionic villi cell	add	1.11111	CL:0000000	cell	1.25	UBERON:0003124	chorion															
colon cell	just cell	1.25	CL:0000000	cell	2	UBERON:0001155	colon															
colon, epithelial cell	use epithelial cell of large intestine	1.44444	CL:0000066	epithelial cell	2	UBERON:0001155	colon															
colon, fetal, epithelial cell	fetal?	1.25	CL:0000066	epithelial cell	1.25	UBERON:0001155	colon	0.75	UBERON:0005630	fetal membrane												
colon, fibroblast cell	add	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0001155	colon												
colon, fibroblast and   epithelial cell	more than one cell type	1.16	CL:0000066	epithelial cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0001155	colon	0.3125	UBERON:0001035	socket									
colon, rounded, refractile cell	shape	1.0625	CL:0000000	cell	1.11111	UBERON:0001155	colon	0.75	UBERON:0002502	round window												
conjunctiva cell	add	1.25	CL:0000000	cell	2	UBERON:0001811	conjunctiva															
connective cell	use below	1.25	CL:0000000	cell	2	connects																
connective tissue cell	use connective tissue cell	1.44444	UBERON:0002384	connective tissue	2	CL:0000000	cell															
connective tissue (metastasis) cell	use above	1.11111	UBERON:0002384	connective tissue	1.0625	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon												
connective tissue, epithelial cell	add	1.25	CL:0000066	epithelial cell	2	UBERON:0002384	connective tissue															
connective tissue, fibroblast cell	use fibroblast (parent is connective tissue)	1.25	UBERON:0002384	connective tissue	1.25	CL:0000000	cell	2	CL:0000057	fibroblast												
connective tissue, mixed cell	more than one cell type	1.25	UBERON:0002384	connective tissue	1.25	CL:0000000	cell	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
connective, fibroblast cell	use fibroblast	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	connects													
cord blood,T lymphocyte, lymphoblast cell	use T cell	1.11111	CL:0000081	blood cell	1.25	CL:0000084	T cell	0.75	UBERON:0000934	ventral nerve cord	1	CL:0000229	lymphoblast									
cornea cell	just cell	1.25	CL:0000000	cell	2	UBERON:0000964	cornea															
dermis cell	just cell	1.25	CL:0000000	cell	2	UBERON:0002067	dermis															
dorsal root ganglion cell	just cell	1.5625	UBERON:0000044	dorsal root ganglion	2	CL:0000000	cell															
ductus deferens cell	just cell	1.44444	UBERON:0001000	vas deferens	2	CL:0000000	cell															
ductus deferens, smooth muscle cell	add	1.64	UBERON:0004224	vas deferens smooth muscle	2	CL:0000000	cell															
duodenum, epithelial cell	add	1.44444	CL:0000066	epithelial cell	2	UBERON:0002114	duodenum															
ectocervix, epithelial cell	use squamous cell of ectocervix	1.44444	CL:0000066	epithelial cell																		
egg cell	use egg cell	2	CL:0000254	egg cell																		
embryo cell	just cell	1.25	CL:0000000	cell	2	UBERON:0000922	embryo															
embryo, epithelial cell	fetal?	1.44444	CL:0000066	epithelial cell	2	UBERON:0000922	embryo															
embryo, fibroblast cell	fetal?	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000922	embryo												
embryo, fibroblast, fibrobast cell	fetal?	1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0000922	embryo												
embryo, lymphoblast cell	fetal?	1.11111	CL:0000000	cell	1.25	UBERON:0000922	embryo	1	CL:0000229	lymphoblast												
embryo, pooled cell	more than one cell type	1.11111	CL:0000000	cell	1.25	UBERON:0000922	embryo															
embryo, spherical colony cell	OBI	1.0625	CL:0000000	cell	1.11111	UBERON:0000922	embryo	0.444444	UBERON:0000049	spherical lensed eye	0.24	CL:0000050	megakaryocyte erythroid progenitor cell									
embryonal carcinoma, epithelial cell	cancer, fetal?	1.25	CL:0000066	epithelial cell	0.75	UBERON:0000068	embryo stage															
embryonal tumor, epithelial cell	cancer, fetal?	1.25	CL:0000066	epithelial cell	0.75	UBERON:0000068	embryo stage															
embryonic carcinoma cell	cancer, fetal?	1.11111	CL:0000000	cell	0.75	UBERON:0000068	embryo stage															
embryonic carcinoma, epithelial cell	cancer, fetal?	1.25	CL:0000066	epithelial cell	0.75	UBERON:0000068	embryo stage															
embryonic fibroblast, fibroblast cell	fetal?	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	0.75	UBERON:0000068	embryo stage												
embryonic fibroblasts, fibroblast cell	fetal?	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	0.75	UBERON:0000068	embryo stage												
embryonic liver, fibroblast cell	fetal?	1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0002107	liver	0.75	UBERON:0000068	embryo stage									
embryonic stem cell cell	use embryonic stem cell	1.44444	CL:0000034	stem cell	0.75	UBERON:0000068	embryo stage															
embryonic stem cell, epithelial cell	OBI? (in vitro differentation?)	1.3125	CL:0000036	epithelial fate stem cell	0.75	UBERON:0000068	embryo stage															
embryonic stem cell, spherical cell	OBI	1.25	CL:0000034	stem cell	0.75	UBERON:0000068	embryo stage	0.444444	UBERON:0000049	spherical lensed eye												
embryonic stem cell, spherical colony cell	OBI	1.16	CL:0000034	stem cell	0.611111	UBERON:0000068	embryo stage	0.444444	UBERON:0000049	spherical lensed eye	0.24	CL:0000050	megakaryocyte erythroid progenitor cell									
endocervix, epithelial cell	use columnar cell of endocervix	1.44444	CL:0000066	epithelial cell	2	UBERON:0000458	endocervix															
endometrium cell	use stromal cell of endometrium	1.25	CL:0000000	cell	2	UBERON:0001295	endometrium															
endothelium, heart cell	use endocardial cell	1.11111	CL:0000000	cell	1.25	UBERON:0000948	heart	2	UBERON:0001986	endothelium												
endothelium, pulmonary artery cell	use endothelial cell of vascular tree? else add	1.25	UBERON:0001917	endothelium of artery	1.25	CL:0000000	cell	0.75	UBERON:0002009	pulmonary nerve plexus												
epidermis, epithelial cell	use epidermal cell	1.44444	CL:0000066	epithelial cell	2	UBERON:0001003	epidermis															
epithelial cell	use epithelial cell	2	CL:0000066	epithelial cell																		
epithelial, adherent cell	OBI?	1.44444	CL:0000066	epithelial cell																		
epithelium, oral squamous cell	use buccal mucosa cell? otherwise add	1.25	UBERON:0002424	oral epithelium	1.25	CL:0000000	cell	0.75	UBERON:0001695	squamous part of temporal bone												
erythropoietic cell	use erythryoid lineage cell	1.25	CL:0000000	cell																		
esophagus, epithelial cell	use epithelial cell of the esophagus	1.44444	CL:0000066	epithelial cell	2	UBERON:0001043	esophagus															
esophagus, fibroblast cell	add	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0001043	esophagus												
exocrine pancreas cell	use epithelial ccell of pancreas	1.44444	CL:0000152	exocrine cell	2	UBERON:0001264	pancreas															
exocrine pancreas, epithelial cell	use above	1.3125	CL:0000083	epithelial cell of pancreas	0.75	CL:0000152	exocrine cell															
eye (choroid), fetal, epithelial cell	fetal	1.08163	CL:0000066	epithelial cell	1.04	UBERON:0000970	eye	1.0625	UBERON:0001776	choroid	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0005630	fetal membrane						
eye (cornea), endothelial cell	use corneal endothelial cell	1.11111	CL:0000115	endothelial cell	1.0625	UBERON:0000964	cornea	1.11111	UBERON:0000970	eye	0.75	UBERON:0000446	septum of telencephalon									
eye (cornea), epithelial cell	use corneal epithelial cell	1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0000964	cornea	1.11111	UBERON:0000970	eye	0.75	UBERON:0000446	septum of telencephalon									
eye (cornea), fibroblast cell	use keratocyte	1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0000964	cornea	1.11111	UBERON:0000970	eye	0.75	UBERON:0000446	septum of telencephalon						
eye (lens), epithelial cell	use lens epithelial cell	1.11111	CL:0000066	epithelial cell	1.25	UBERON:0000965	lens	0.75	UBERON:0000446	septum of telencephalon												
eye (retina), grape-like clusters cell	OBI?	1.01562	CL:0000000	cell	1.02041	UBERON:0000966	retina	1.02778	UBERON:0000970	eye	0.66	UBERON:0000446	septum of telencephalon	0.611111	UBERON:0000477	anatomical cluster	0.444444	CL:0000265	anterior like cell			
eye (retina), grape-like clusters cell	OBI?	1.02041	CL:0000000	cell	1.02778	UBERON:0000966	retina	1.04	UBERON:0000970	eye	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0000477	anatomical cluster						
eye (retina), multicellular   clusters cell	OBI?	1.02041	CL:0000000	cell	1.02778	UBERON:0000966	retina	1.04	UBERON:0000970	eye	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0000477	anatomical cluster						
eye (retina), pigmented epithelium, epithelial cell	add	1.14062	CL:0000529	pigmented epithelial cell	1.04	UBERON:0000483	epithelium	1.0625	UBERON:0000966	retina	1.11111	UBERON:0000970	eye	0.75	UBERON:0000446	septum of telencephalon						
eye, epithelial cell	just cell	1.44444	CL:0000066	epithelial cell	2	UBERON:0000970	eye															
eye, retina, epithelial cell	add	1.25	CL:0000066	epithelial cell	1.25	UBERON:0000966	retina	2	UBERON:0000970	eye												
fallopian tube (metastasis), epithelial cell	cancer, add	1.08163	CL:0000066	epithelial cell	1.16	UBERON:0003889	fallopian tube	0.75	UBERON:0000446	septum of telencephalon												
femoral artery, endothelial cell	use endothelial cell of vascular tree? else add	1.25	CL:0000115	endothelial cell	2	UBERON:0002060	femoral artery															
fetal brain cell	fetal	1.11111	CL:0000000	cell	1.25	UBERON:0000955	brain	0.75	UBERON:0005630	fetal membrane												
fetus, fibroblast cell	feta	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000323	fetus												
fibroblast cell	use fibroblast	1.25	CL:0000000	cell	2	CL:0000057	fibroblast															
fibroblast, adherent cell	OBI	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast															
fibroblast, embryonic cell	fetal	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	0.75	UBERON:0000068	embryo stage												
fibrosarcoma, adherent cell	cancer, OBI	1.11111	CL:0000000	cell																		
fibrosarcoma, epithelial cell	cancer,	1.44444	CL:0000066	epithelial cell																		
fibrosarcoma, mixed cell	cacner, more than one cell type	1.11111	CL:0000000	cell	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure															
fibrous histiocytoma, fibroblast cell	cancer	1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	0.75	UBERON:0000211	ligament												
fin cell	just cell	1.25	CL:0000000	cell	2	UBERON:0002534	fin															
fin, fibroblast cell	add, see caudal fin fibroblast	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0002534	fin												
foreskin cell	just cell	1.25	CL:0000000	cell	2	UBERON:0001332	prepuce of penis															
foreskin fibroblasts, newborn, fibroblast cell	fetal, add	1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0001332	prepuce of penis												
foreskin, fetal cell	just cell	1.11111	CL:0000000	cell	1.25	UBERON:0001332	prepuce of penis	0.75	UBERON:0005630	fetal membrane												
foreskin, fibroblast cell	add	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0001332	prepuce of penis												
Gasser_s node cell	just cell	1.04	CL:0000000	cell	0.75	UBERON:0002351	sinuatrial node	0.444444	adjacent_to													
gill, epithelial cell	add	1.44444	CL:0000066	epithelial cell	2	UBERON:0002535	gill															
gill, pleomorphic cell	shape	1.11111	CL:0000000	cell	1.25	UBERON:0002535	gill															
gingiva, fibroblast cell	add, see caudal fin fibroblast	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0001828	gingiva												
gingival stroma cell	same as above? add	1.11111	CL:0000000	cell	1.25	UBERON:0003891	stroma	0.75	UBERON:0001949	gingival epithelium												
glial cell	use glial cell	2	CL:0000125	glial cell																		
glomerulal, endothelial cells cell	use glomerular endothelial cell	1.44444	CL:0000115	endothelial cell																		
gonadal tissue, fibroblast cell	add	1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0000479	portion of tissue	2	UBERON:0000991	gonad									
haemopoietic cell	use hematopoeitic cell	2	CL:0000988	hematopoietic cell																		
heart cell	just cell	1.25	CL:0000000	cell	2	UBERON:0000948	heart															
heart (myocardium), myoblast cell	use myoblast	1.11111	UBERON:0002349	myocardium	1.0625	CL:0000000	cell	1.11111	CL:0000056	myoblast	0.75	UBERON:0000446	septum of telencephalon									
heart (vascular endothelium), fetal, endothelial cell	fetal? use endocardial	1.0625	CL:0000115	endothelial cell	1.02778	UBERON:0000948	heart	1.04	UBERON:0001986	endothelium	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0002049	vasculature	0.75	UBERON:0005630	fetal membrane			
heart, embryonic cell	just cell	1.11111	CL:0000000	cell	1.25	UBERON:0000948	heart	0.75	UBERON:0000068	embryo stage												
heart, epithelial cell	add	1.44444	CL:0000066	epithelial cell	2	UBERON:0000948	heart															
heart, fibroblast cell	add	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000948	heart												
HeLa contaminant, epithelial cell	Obi	1.25	CL:0000066	epithelial cell																		
HeLa transformed with adenovirus E1a and E1b, epithelial cell	Obi	1.04938	CL:0000066	epithelial cell	0.353741	coincides_with	0.277778	UBERON:0001035	socket													
helper/inducer T lymphocyte, lymphoblast cell	use helper T cell	1.18367	CL:0000912	helper T cell	1.0625	CL:0000542	lymphocyte	0.611111	CL:0000902	induced T-regulatory cell	0.625	CL:0000229	lymphoblast									
hemangioendothelioma, endothelial cell	cancer, use endothelial cell	1.44444	CL:0000115	endothelial cell																		
hippocampus, fibroblast cell	add	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0001954	hippocampus												
histiocytosis, macrophage cell	disease, use macrophage	1.11111	CL:0000000	cell	1.25	CL:0000235	macrophage															
hybrid cell	OBI	1.25	CL:0000000	cell																		
hybrid embryonic kidney/lymphocyte cell	OBI	1.02778	CL:0000000	cell	1.04	CL:0000542	lymphocyte	1.0625	UBERON:0002113	kidney	0.611111	UBERON:0000068	embryo stage									
hybrid kidney/fibroblast cell	OBI	1.04	CL:0000000	cell	1.0625	CL:0000057	fibroblast	1.11111	UBERON:0002113	kidney												
hybrid kidney/lymphocyte cell	OBI	1.04	CL:0000000	cell	1.0625	CL:0000542	lymphocyte	1.11111	UBERON:0002113	kidney												
hybrid, B cells x myeloma cell	OBI	1.16	CL:0000236	B cell	0.611111	UBERON:0002687	area x															
hybridoma fusion partner, lymphoblast cell	OBI	1.04	CL:0000000	cell	0.53125	CL:0000229	lymphoblast	0.444444	CL:0000621	fusion competent myoblast												
hybridoma, lymphoblast cell	OBI	1.11111	CL:0000000	cell	0.625	CL:0000229	lymphoblast															
hybrid-trophoblast cell	OBI	1.44444	CL:0000351	trophoblast cell																		
hybrid-trophoblast cell	OBI	1.25	CL:0000000	cell																		
ileum, epithelial cell	add	1.44444	CL:0000066	epithelial cell	2	UBERON:0002116	ileum															
iliac artery, endothelial cell	use endothelial cell of vascular tree? else add	1.25	CL:0000115	endothelial cell	2	UBERON:0005609	iliac artery															
iliac vein, endothelial cell	use endothelial cell of vascular tree? else add	1.25	CL:0000115	endothelial cell	2	UBERON:0005610	iliac vein															
iliac vein, smooth muscle cell	use vascular associated smooth muscle cell? else add	1.36	CL:0000192	smooth muscle cell	2	UBERON:0005610	iliac vein															
inguinal lymph node (metastasis), fibroblast cell	cancer, add	1.14062	UBERON:0001542	inguinal lymph node	1.04	CL:0000000	cell	1.0625	CL:0000057	fibroblast	0.75	UBERON:0000446	septum of telencephalon									
interscapular tumor, possibly basal cell   mouse/mouse, lymphoblast cell	more than one cell type	1.0625	CL:0000646	basal cell	0.513889	CL:0000229	lymphoblast															
intestine, embryonic cell	fetal,	1.11111	CL:0000000	cell	1.25	UBERON:0000160	intestine	0.75	UBERON:0000068	embryo stage												
intestine, fibroblast cell	add	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000160	intestine												
intestine, ileocecal cell	just cell	1.11111	CL:0000000	cell	1.25	UBERON:0000160	intestine	0.75	UBERON:0001073	ileocecal junction												
intestine, ileum cell	just cell	1.11111	CL:0000000	cell	1.25	UBERON:0000160	intestine	2	UBERON:0002116	ileum												
intestine, small cell	just cell	1.44444	UBERON:0002108	small intestine	2	CL:0000000	cell															
jejunum (myenteric plexus), glial cell	add	1.08163	CL:0000125	glial cell	1.16	UBERON:0002439	myenteric nerve plexus	1.11111	UBERON:0002115	jejunum	0.75	UBERON:0000446	septum of telencephalon									
keratinocyte, adherent on feeder cells feeder cells cell	OBI	1.04	CL:0000000	cell	1.0625	CL:0000312	keratinocyte	0.444444	CL:0000749	ON-bipolar cell												
kidney cell	just cell	1.25	CL:0000000	cell	2	UBERON:0002113	kidney															
kidney (cortex), collecting duct, epithelial cell	use renal principal cell?	1.14062	CL:0000068	duct epithelial cell	1.16	UBERON:0001225	cortex of kidney	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0001232	collecting duct of renal tubule									
kidney (cortex), epithelial cell	add	1.11111	CL:0000066	epithelial cell	1.25	UBERON:0001225	cortex of kidney	0.75	UBERON:0000446	septum of telencephalon												
kidney (cortex), proximal tubule, epithelial cell	use epithelial cell of proximal tubule	1.0625	CL:0000066	epithelial cell	1.11111	UBERON:0001225	cortex of kidney	1.25	UBERON:0004134	proximal tubule	0.75	UBERON:0000446	septum of telencephalon									
kidney (cortex, proximal tubule), epithelial cell	use above	1.0625	CL:0000066	epithelial cell	1.11111	UBERON:0001225	cortex of kidney	1.25	UBERON:0004134	proximal tubule	0.75	UBERON:0000446	septum of telencephalon									
kidney (glomerulus), myofibroblast-like cell	like cell? true in vivo?	1.08163	CL:0000186	myofibroblast cell	1.04	UBERON:0002113	kidney	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0000074	renal glomerulus	0.444444	CL:0000265	anterior like cell						
kidney (glomerulus), myofibroblast-like cell	like cell? true in vivo?	1.02778	CL:0000000	cell	1.04	UBERON:0002113	kidney	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0000074	renal glomerulus									
kidney (glomus), fibroblast cell	add	1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0002113	kidney	1.11111	UBERON:0004191	glomus	0.75	UBERON:0000446	septum of telencephalon						
kidney (medulla, collecting duct), epithelial cell	use renal principal cell?	1.14062	CL:0000068	duct epithelial cell	1.16	UBERON:0000362	renal medulla	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0001232	collecting duct of renal tubule									
kidney (proximal tubule), epithelial cell	use epithelial cell of proximal tubule	1.08163	CL:0000066	epithelial cell	1.16	UBERON:0001231	renal tubule	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0004134	proximal tubule									
kidney, amoeboid cell	use mesangial phagocyte cell	1.44444	CL:0000732	amoeboid cell	2	UBERON:0002113	kidney															
kidney, B cell cell	B cell	1.44444	CL:0000236	B cell	2	UBERON:0002113	kidney															
kidney, B cell, epithelial cell	B cell	1.25	CL:0000066	epithelial cell	1.25	UBERON:0002113	kidney	0.75	CL:0000236	B cell												
kidney, embryonic cell	fetal?	1.11111	CL:0000000	cell	1.25	UBERON:0002113	kidney	0.75	UBERON:0000068	embryo stage												
kidney, epithelial cell	add	1.44444	CL:0000066	epithelial cell	2	UBERON:0002113	kidney															
kidney, fetal cell	fetal?	1.11111	CL:0000000	cell	1.25	UBERON:0002113	kidney	0.75	UBERON:0005630	fetal membrane												
kidney, fetal, epithelial cell	fetal?	1.25	CL:0000066	epithelial cell	1.25	UBERON:0002113	kidney	0.75	UBERON:0005630	fetal membrane												
kidney, fibroblast cell	add	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0002113	kidney												
kidney, glomerular epithelial cell	add	1.25	CL:0000066	epithelial cell	1.25	UBERON:0002113	kidney	0.75	UBERON:0001230	glomerular capsule												
kidney, loosely adherent cell	OBI	1.0625	CL:0000000	cell	1.11111	UBERON:0002113	kidney															
kidney, mixed cell	more than one cell type	1.11111	CL:0000000	cell	1.25	UBERON:0002113	kidney	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
kidney, peripheral blood, epithelial cell	more than one cell type	1.16	CL:0000066	epithelial cell	1.11111	UBERON:0000178	blood	1.25	UBERON:0002113	kidney	0.75	CL:0000111	peripheral neuron									
kidney, tubule, epithelial cell	add	1.25	CL:0000066	epithelial cell	2	UBERON:0001231	renal tubule															
larva cell	fetal?	1.25	CL:0000000	cell	2	UBERON:0002548	larva															
larva, epithelial cell	fetal?	1.44444	CL:0000066	epithelial cell	2	UBERON:0002548	larva															
larvae cell	fetal?	1.25	CL:0000000	cell	2	UBERON:0002548	larva															
larvae, epithelial cell	fetal?	1.44444	CL:0000066	epithelial cell	2	UBERON:0002548	larva															
larvae, minced cell	OBI	1.11111	CL:0000000	cell	1.25	UBERON:0002548	larva															
larynx cell	just cell	1.25	CL:0000000	cell	2	UBERON:0001737	larynx															
leukemia, lymphoblast cell	cancer, lymphocyte	1.11111	CL:0000000	cell	0.625	CL:0000229	lymphoblast															
leukocyte cell	cancer, lymphocyte	1.25	CL:0000000	cell	2	CL:0000738	leukocyte															
lineage-specific GFP expression, spherical colony cell	OBI	1.02041	CL:0000000	cell	0.361111	CL:0000220	cell by lineage	0.373333	UBERON:0000049	spherical lensed eye	0.24	CL:0000050	megakaryocyte erythroid progenitor cell									
lineage-specific GFP expression, spherical colony cell	OBI	1.02778	CL:0000000	cell	0.373333	UBERON:0000049	spherical lensed eye	0.24	CL:0000050	megakaryocyte erythroid progenitor cell												
liver cell	just cell	1.25	CL:0000000	cell	2	UBERON:0002107	liver															
liver (metastasis) cell	cancer, just cell	1.04	CL:0000000	cell	1.0625	UBERON:0002107	liver	0.75	UBERON:0000446	septum of telencephalon												
liver (metastasis), epithelial cell	cancer, add	1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0002107	liver	0.75	UBERON:0000446	septum of telencephalon												
liver, Alexander cells, epithelial cell	cancerous liver cell line	1.25	CL:0000066	epithelial cell	1.25	UBERON:0002107	liver															
liver, embryonic cell	fetal	1.11111	CL:0000000	cell	1.25	UBERON:0002107	liver	0.75	UBERON:0000068	embryo stage												
liver, epithelial cell	add	1.44444	CL:0000066	epithelial cell	2	UBERON:0002107	liver															
liver, fibroblast cell	add	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0002107	liver												
liver, left lobe, epithelial cell		1.36	UBERON:0001115	left lobe of liver	2	CL:0000066	epithelial cell															
liver, mast cell, lymphoblast cell		1.25	CL:0000097	mast cell	1.25	UBERON:0002107	liver	1	CL:0000229	lymphoblast												
liver, parenchymal cells, epithelial cell		1.25	CL:0000066	epithelial cell	1.25	UBERON:0002107	liver	0.75	CL:0000668	parenchymal cell												
liver, stroma, fetal, fibroblast cell		1.04	CL:0000000	cell	1.0625	CL:0000057	fibroblast	1.11111	UBERON:0002107	liver	1.25	UBERON:0003891	stroma	0.75	UBERON:0005630	fetal membrane						
lung cell		1.25	CL:0000000	cell	2	UBERON:0000170	pair of lungs															
lung (bronchiole, epithelial cell		1.16	CL:0000066	epithelial cell	1.11111	UBERON:0000170	pair of lungs	1.25	UBERON:0002186	bronchiole	0.3125	UBERON:0000446	septum of telencephalon									
lung (bronchus) cell		1.04	CL:0000000	cell	1.0625	UBERON:0000170	pair of lungs	1.11111	UBERON:0002185	bronchus	0.75	UBERON:0000446	septum of telencephalon									
lung (bronchus), epithelial cell		1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0000170	pair of lungs	1.11111	UBERON:0002185	bronchus	0.75	UBERON:0000446	septum of telencephalon									
lung (metastasis) cell		1.04	CL:0000000	cell	1.0625	UBERON:0000170	pair of lungs	0.75	UBERON:0000446	septum of telencephalon												
lung (metastasis), epithelial cell		1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0000170	pair of lungs	0.75	UBERON:0000446	septum of telencephalon												
lung (metastasis), fibroblast cell		1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0000170	pair of lungs	0.75	UBERON:0000446	septum of telencephalon									
lung (metastasis), mixed cell		1.02778	CL:0000000	cell	1.04	UBERON:0000170	pair of lungs	0.75	UBERON:0000446	septum of telencephalon	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure									
lung nodule cell		1.11111	CL:0000000	cell	1.25	UBERON:0000170	pair of lungs	0.75	UBERON:0000444	lymphoid follicle												
lung or bronchus cell		1.0625	CL:0000000	cell	1.11111	UBERON:0000170	pair of lungs	1.25	UBERON:0002185	bronchus	0.444444	UBERON:0004708	limb/fin									
lung or bronchus cell		1.0625	CL:0000000	cell	1.11111	UBERON:0000170	pair of lungs	1.25	UBERON:0002185	bronchus	0.444444	UBERON:0004708	limb/fin									
lung or bronchus (metastasis) cell		1.02041	CL:0000000	cell	1.02778	UBERON:0000170	pair of lungs	1.04	UBERON:0002185	bronchus	0.75	UBERON:0000446	septum of telencephalon	0.444444	UBERON:0004708	limb/fin						
lung or bronchus (metastasis), epithelial cell		1.0625	CL:0000066	epithelial cell	1.02778	UBERON:0000170	pair of lungs	1.04	UBERON:0002185	bronchus	0.75	UBERON:0000446	septum of telencephalon	0.444444	UBERON:0004708	limb/fin						
lung or bronchus (metastasis), fibroblast cell		1.01562	CL:0000000	cell	1.02041	CL:0000057	fibroblast	1.02778	UBERON:0000170	pair of lungs	1.04	UBERON:0002185	bronchus	0.75	UBERON:0000446	septum of telencephalon	0.444444	UBERON:0004708	limb/fin			
lung or bronchus, fibroblast cell		1.04	CL:0000000	cell	1.0625	CL:0000057	fibroblast	1.11111	UBERON:0000170	pair of lungs	1.25	UBERON:0002185	bronchus	0.444444	UBERON:0004708	limb/fin						
lung, adherent cell		1.11111	CL:0000000	cell	1.25	UBERON:0000170	pair of lungs															
lung, bronchus, epithelial cell		1.3125	CL:0000082	epithelial cell of lung	2	UBERON:0002185	bronchus															
lung, embryonic cell		1.11111	CL:0000000	cell	1.25	UBERON:0000170	pair of lungs	0.75	UBERON:0000068	embryo stage												
lung, endothelium cell		1.11111	CL:0000000	cell	1.25	UBERON:0000170	pair of lungs	2	UBERON:0001986	endothelium												
lung, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0000170	pair of lungs															
lung, fetal cell		1.11111	CL:0000000	cell	1.25	UBERON:0000170	pair of lungs	0.75	UBERON:0005630	fetal membrane												
lung, fetal, fibroblast cell		1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0000170	pair of lungs	0.75	UBERON:0005630	fetal membrane									
lung, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000170	pair of lungs												
lung, macrophage cell		1.11111	CL:0000000	cell	1.25	CL:0000235	macrophage	2	UBERON:0000170	pair of lungs												
lung, metastasis cell		1.11111	CL:0000000	cell	1.25	UBERON:0000170	pair of lungs															
lung, mixed cell		1.11111	CL:0000000	cell	1.25	UBERON:0000170	pair of lungs	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
lung, pleural effusion cell		1.25	UBERON:0000175	pleural effusion	1.25	CL:0000000	cell	2	UBERON:0000170	pair of lungs												
lung, pleural effusion, epithelial cell		1.16	CL:0000066	epithelial cell	1.44444	UBERON:0000175	pleural effusion	2	UBERON:0000170	pair of lungs												
lung, smooth muscle cell		1.5625	CL:0000192	smooth muscle cell	2	UBERON:0000170	pair of lungs															
lymph cell		1.25	CL:0000000	cell	2	UBERON:0002391	lymph															
lymph node cell		1.44444	UBERON:0000029	lymph node	2	CL:0000000	cell															
lymph node (metastasis) cell		1.11111	UBERON:0000029	lymph node	1.0625	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon												
lymph node (metastasis), epithelial cell		1.08163	CL:0000066	epithelial cell	1.16	UBERON:0000029	lymph node	0.75	UBERON:0000446	septum of telencephalon												
lymph node (metastasis), fibroblast cell		1.08163	UBERON:0000029	lymph node	1.04	CL:0000000	cell	1.0625	CL:0000057	fibroblast	0.75	UBERON:0000446	septum of telencephalon									
lymph node (metastasis), lymphoblast cell		1.08163	UBERON:0000029	lymph node	1.04	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon	0.625	CL:0000229	lymphoblast									
lymph node (metastasis), mixed cell		1.08163	UBERON:0000029	lymph node	1.04	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure									
lymph node (metastatic), mixed, stellate cell		1.0625	CL:0000122	stellate cell	1.11111	UBERON:0000029	lymph node	0.75	UBERON:0000446	septum of telencephalon	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure									
lymph node, fetal cell		1.25	UBERON:0000029	lymph node	1.25	CL:0000000	cell	0.75	UBERON:0005630	fetal membrane												
lymph node, fibroblast cell		1.25	UBERON:0000029	lymph node	1.25	CL:0000000	cell	2	CL:0000057	fibroblast												
lymph node, left supraclavicular region (metas-   tasis), epithelial cell		1.03306	CL:0000066	epithelial cell	1.04938	UBERON:0000029	lymph node	0.598639	UBERON:0004548	left eye	0.66	UBERON:0000446	septum of telencephalon									
lymph node, left supraclavicular region (metas-   tasis), epithelial cell		1.03306	CL:0000066	epithelial cell	1.04938	UBERON:0000029	lymph node	0.598639	UBERON:0004548	left eye	0.66	UBERON:0000446	septum of telencephalon									
lymph node, lymphoblast cell		1.25	UBERON:0000029	lymph node	1.25	CL:0000000	cell	1	CL:0000229	lymphoblast												
lymph node, metastasis cell		1.25	UBERON:0000029	lymph node	1.25	CL:0000000	cell															
lymph node, mixed cell		1.25	UBERON:0000029	lymph node	1.25	CL:0000000	cell	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
lymph node, neck (metastasis), fibroblast cell		1.0625	CL:0000651	neck cell	1.11111	UBERON:0000029	lymph node	1.0625	CL:0000057	fibroblast	0.75	UBERON:0000446	septum of telencephalon									
lymph node, spleen, lymphoblast cell		1.16	UBERON:0000029	lymph node	1.11111	CL:0000000	cell	1.25	UBERON:0002106	spleen	1	CL:0000229	lymphoblast									
lymph node,thymus cell		1.25	UBERON:0000029	lymph node	1.25	CL:0000000	cell	2	UBERON:0002370	thymus												
lymph nodes (metastasis), epithelial cell		1.08163	CL:0000066	epithelial cell	1.16	UBERON:0000029	lymph node	0.75	UBERON:0000446	septum of telencephalon												
lymphatic tissue cell		1.44444	UBERON:0001744	lymphoid tissue	2	CL:0000000	cell															
lymphoblast cell		1.25	CL:0000000	cell	1	CL:0000229	lymphoblast															
lymphoblast cell hybrid, lymphoblast cell		1.11111	CL:0000000	cell	0.625	CL:0000229	lymphoblast															
lymphoblast, lymphoblast cell		1.25	CL:0000000	cell	1	CL:0000229	lymphoblast															
lymphoblastoid B cell cell		1.44444	CL:0000236	B cell																		
lymphocyte cell		1.25	CL:0000000	cell	2	CL:0000542	lymphocyte															
lymphocyte B, peripheral cell		1.25	CL:0000236	B cell	1.25	CL:0000542	lymphocyte	0.75	CL:0000111	peripheral neuron												
lymphocyte, peripheral cell		1.11111	CL:0000000	cell	1.25	CL:0000542	lymphocyte	0.75	CL:0000111	peripheral neuron												
lymphocyte, T cell		1.44444	CL:0000084	T cell	2	CL:0000542	lymphocyte															
lymphocytic leukemia, lymphoblast cell		1.0625	CL:0000000	cell	1.11111	CL:0000542	lymphocyte	0.625	CL:0000229	lymphoblast												
lymphoid cell		1.25	CL:0000000	cell	0.75	UBERON:0000444	lymphoid follicle															
lymphoid organs cell		1.11111	CL:0000000	cell	1.25	UBERON:0000062	organ	0.75	UBERON:0000444	lymphoid follicle												
lymphosarcoma, lymphoblast cell		1.11111	CL:0000000	cell	0.625	CL:0000229	lymphoblast															
macrophage cell		1.25	CL:0000000	cell	2	CL:0000235	macrophage															
macrophage, lymphoblast cell		1.11111	CL:0000000	cell	1.25	CL:0000235	macrophage	1	CL:0000229	lymphoblast												
macrophage, monocyte cell		1.11111	CL:0000000	cell	1.25	CL:0000235	macrophage	2	CL:0000576	monocyte												
mammary gland cell		1.44444	UBERON:0001911	mammary gland	2	CL:0000000	cell															
mammary gland tumor, epithelial cell		1.16	CL:0000066	epithelial cell	1.44444	UBERON:0001911	mammary gland															
mammary gland, abnormal, fibroblast cell		1.16	UBERON:0001911	mammary gland	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast												
mammary gland, abnormal, mixed cell		1.16	UBERON:0001911	mammary gland	1.11111	CL:0000000	cell	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
mammary gland, epithelial cell		1.3125	UBERON:0003244	epithelium of mammary gland	2	CL:0000000	cell															
mammary gland, epithelium, epithelial cell		1.36	UBERON:0003244	epithelium of mammary gland	2	CL:0000066	epithelial cell															
mammary gland, fibroblast cell		1.25	UBERON:0001911	mammary gland	1.25	CL:0000000	cell	2	CL:0000057	fibroblast												
mammary gland, mixed cell		1.25	UBERON:0001911	mammary gland	1.25	CL:0000000	cell	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
mammary gland, suspension cell		1.25	UBERON:0001911	mammary gland	1.25	CL:0000000	cell															
mast cell cell		2	CL:0000097	mast cell																		
mast cell, mast cell cell		2	CL:0000097	mast cell																		
mesenteric lymph node, fibroblast cell		1.36	UBERON:0002509	mesenteric lymph node	1.25	CL:0000000	cell	2	CL:0000057	fibroblast												
mesenteric lymph node, mixed cell		1.36	UBERON:0002509	mesenteric lymph node	1.25	CL:0000000	cell	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
mesentery, small bowel (metastasis), epithelial cell		1.14062	UBERON:0001170	mesentery of small intestine	1.16	CL:0000066	epithelial cell	0.75	UBERON:0000446	septum of telencephalon												
mesonephros cell		1.25	CL:0000000	cell	2	UBERON:0000080	mesonephros															
mesothelium, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0001136	mesothelium															
mixed cell		1.25	CL:0000000	cell	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure															
mixed connective and soft tissue cell		1.11111	UBERON:0002384	connective tissue	1.0625	CL:0000000	cell	0.611111	UBERON:0001733	soft palate	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure						
mixed connective and soft tissue, fibroblast cell		1.08163	UBERON:0002384	connective tissue	1.04	CL:0000000	cell	1.0625	CL:0000057	fibroblast	0.611111	UBERON:0001733	soft palate	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure			
mixed connective tissue and muscle, epithelial cell		1.08163	CL:0000066	epithelial cell	1.16	UBERON:0002384	connective tissue	0.611111	CL:0000187	muscle cell	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure						
mixed connective tissue and muscle, fibroblast cell		1.08163	CL:0000187	muscle cell	1.16	UBERON:0002384	connective tissue	1.11111	CL:0000057	fibroblast	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure						
mixed skin and muscle, fibroblast cell		1.11111	CL:0000187	muscle cell	1.0625	CL:0000057	fibroblast	1.11111	UBERON:0000014	zone of skin	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure						
mixed spleen and thymus cell		1.04	CL:0000000	cell	1.0625	UBERON:0002106	spleen	1.11111	UBERON:0002370	thymus	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure						
mixed spleen and thymus, fetal cell		1.02778	CL:0000000	cell	1.04	UBERON:0002106	spleen	1.0625	UBERON:0002370	thymus	0.611111	UBERON:0005630	fetal membrane	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure			
mixed spleen and thymus, fibroblast cell		1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0002106	spleen	1.11111	UBERON:0002370	thymus	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure			
mixed spleen and thymus, mixed cell		1.04	CL:0000000	cell	1.0625	UBERON:0002106	spleen	1.11111	UBERON:0002370	thymus	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure						
mixed spleen, thymus, and bone marrow, fibroblast cell		1.0625	UBERON:0002371	bone marrow	1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0002106	spleen	1.11111	UBERON:0002370	thymus	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure
mixed testis and ovary, fibroblast cell		1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0000473	testis	1.11111	UBERON:0000992	ovary	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure			
mixed: spleen, thymus, and bone marrow cell		1.08163	UBERON:0002371	bone marrow	1.04	CL:0000000	cell	1.0625	UBERON:0002106	spleen	1.11111	UBERON:0002370	thymus	0.3125	UBERON:0001035	socket	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure			
monocyte cell		1.25	CL:0000000	cell	2	CL:0000576	monocyte															
monocyte, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	CL:0000576	monocyte												
monocyte, monocyte cell		1.25	CL:0000000	cell	2	CL:0000576	monocyte															
monocyte-macrophage cell		1.11111	CL:0000000	cell	1.25	CL:0000235	macrophage	2	CL:0000576	monocyte												
monocyte-macrophage cell		1.25	CL:0000000	cell																		
mouth, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000165	mouth												
muscle cell		2	CL:0000187	muscle cell																		
muscle (metastasis), epithelial cell		1.11111	CL:0000066	epithelial cell	0.75	UBERON:0000446	septum of telencephalon	0.75	CL:0000187	muscle cell												
muscle, epithelial cell		1.44444	CL:0000066	epithelial cell	1	UBERON:0001015	musculature															
muscle, fibroblast cell		1.44444	CL:0000187	muscle cell	2	CL:0000057	fibroblast															
muscle, spindle and large cell		1.16	CL:0000187	muscle cell	0.611111	UBERON:0000059	large intestine	0.75	UBERON:0003718	muscle spindle	0.3125	UBERON:0001035	socket									
myeloblast cell		1.25	CL:0000000	cell	2	CL:0000835	myeloblast															
myeloma, epithelial cell		1.44444	CL:0000066	epithelial cell																		
myelomonocyte cell		1.25	CL:0000000	cell																		
nasal septum cell		1.44444	UBERON:0001706	nasal septum	2	CL:0000000	cell															
nasal turbinate, mucosa, fibroblast cell		1.16	UBERON:0001762	nasal concha	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000344	mucosa									
nasal, epithelial cell		1.44444	CL:0000066	epithelial cell	0.75	UBERON:0000402	nasal vestibule															
natural killer cell, lymphoblast cell		1.5625	CL:0000623	natural killer cell	1	CL:0000229	lymphoblast															
nervous system cell		1.44444	UBERON:0001016	nervous system	2	CL:0000000	cell															
neural cell		1.25	CL:0000000	cell	0.75	UBERON:0000125	neural nucleus															
neuroblast cell		1.25	CL:0000000	cell	2	CL:0000031	neuroblast															
neuroretina cell		1.25	CL:0000000	cell	2	UBERON:0003902	retinal neural layer															
NULL cell		1.25	CL:0000000	cell	0.375	CL:0000585	null cell															
oesophagus cell		1.25	CL:0000000	cell	2	UBERON:0001043	esophagus															
omentum (metastasis), epithelial cell		1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0003688	omentum	0.75	UBERON:0000446	septum of telencephalon												
oral cavity cell		1.44444	UBERON:0000167	oral cavity	2	CL:0000000	cell															
osteosarcoma, epithelial cell		1.44444	CL:0000066	epithelial cell																		
osteosarcoma, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast															
ovary cell		1.25	CL:0000000	cell	2	UBERON:0000992	ovary															
ovary (metastasis), epithelial cell		1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0000992	ovary	0.75	UBERON:0000446	septum of telencephalon												
ovary (metastasis), lymphoblast cell		1.02778	CL:0000000	cell	1.04	UBERON:0000992	ovary	0.75	UBERON:0000446	septum of telencephalon	0.625	CL:0000229	lymphoblast									
ovary, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0000992	ovary															
ovary, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000992	ovary												
ovary, mixed cell		1.11111	CL:0000000	cell	1.25	UBERON:0000992	ovary	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
ovary, varied cell		1.11111	CL:0000000	cell	1.25	UBERON:0000992	ovary															
palatal mesenchyme, fetal, fibroblast cell		1.16	CL:0000134	mesenchymal cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0001716	palate	0.75	UBERON:0005630	fetal membrane									
pancreas cell		1.25	CL:0000000	cell	2	UBERON:0001264	pancreas															
pancreas (duct), epithelial cell		1.25	CL:0000068	duct epithelial cell	1.11111	UBERON:0001264	pancreas	0.75	UBERON:0000446	septum of telencephalon												
pancreas (islet of Langerhans), endothelium cell		1.0625	CL:0000453	Langerhans cell	1.02778	UBERON:0001264	pancreas	1.04	UBERON:0001986	endothelium	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0000006	islet of Langerhans						
pancreas (islet of Langerhans), endothelium, endothelial cell		1.04938	CL:0000115	endothelial cell	1.02041	UBERON:0001264	pancreas	1.02778	UBERON:0001986	endothelium	0.826667	UBERON:0000006	islet of Langerhans	0.75	UBERON:0000446	septum of telencephalon						
pancreas (islet of Langerhans), epithelial cell		1.0625	CL:0000066	epithelial cell	1.02778	UBERON:0001264	pancreas	0.826667	UBERON:0000006	islet of Langerhans	0.75	UBERON:0000446	septum of telencephalon									
pancreas, alpha cell, epithelial cell		1.3125	CL:0000083	epithelial cell of pancreas	0.75	CL:0000638	acidophil cell															
pancreas, beta cell cell		1.11111	CL:0000000	cell	1.25	UBERON:0001264	pancreas	0.75	CL:0000476	thyroid stimulating hormone secreting cell												
pancreas, beta cell, epithelial cell		1.3125	CL:0000083	epithelial cell of pancreas	0.75	CL:0000476	thyroid stimulating hormone secreting cell															
pancreas, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0001264	pancreas															
pancreas, polygonal cell		1.44444	CL:0000398	polygonal cell	2	UBERON:0001264	pancreas															
pancreatic ductal cell		1.11111	CL:0000000	cell	0.75	UBERON:0000006	islet of Langerhans															
parotid salivary gland, fibroblast cell		1.16	UBERON:0001044	salivary gland	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0001831	parotid gland									
pelvic wall, metastasis cell		1.0625	CL:0000000	cell	1.11111	UBERON:0000060	anatomical wall	0.75	UBERON:0000152	pelvic fin												
pericardial fluid (metastasis), epithelial cell		1.08163	CL:0000066	epithelial cell	1.16	UBERON:0002409	pericardial fluid	0.75	UBERON:0000446	septum of telencephalon												
peripheral blood cell		1.44444	CL:0000081	blood cell	0.75	CL:0000111	peripheral neuron															
peripheral blood mononuclear cells, T lymphocytes cell		1.11111	CL:0000081	blood cell	1.25	CL:0000084	T cell	0.75	CL:0000111	peripheral neuron	0.75	CL:0000113	mononuclear phagocyte									
peripheral blood, B cell cell		1.25	CL:0000081	blood cell	0.75	CL:0000111	peripheral neuron	0.75	CL:0000236	B cell												
peripheral blood, B lymphocyte, lymphoblast cell		1.11111	CL:0000081	blood cell	1.25	CL:0000236	B cell	0.75	CL:0000111	peripheral neuron	1	CL:0000229	lymphoblast									
peripheral blood, basophil, myeloblast cell		1.16	CL:0000081	blood cell	1.44444	CL:0000829	basophilic myeloblast	0.75	CL:0000111	peripheral neuron												
peripheral blood, fibroblast cell		1.25	CL:0000081	blood cell	1.25	CL:0000057	fibroblast	0.75	CL:0000111	peripheral neuron												
peripheral blood, leukocyte cell		1.25	CL:0000081	blood cell	1.25	CL:0000738	leukocyte	0.75	CL:0000111	peripheral neuron												
peripheral blood, lymphoblast cell		1.25	CL:0000081	blood cell	0.75	CL:0000111	peripheral neuron	1	CL:0000229	lymphoblast												
peripheral blood, lymphoblast, lymphoblast cell		1.25	CL:0000081	blood cell	0.75	CL:0000111	peripheral neuron	1	CL:0000229	lymphoblast												
peripheral blood, macrophage, macrophage cell		1.25	CL:0000081	blood cell	1.25	CL:0000235	macrophage	0.75	CL:0000111	peripheral neuron												
peripheral blood, monocyte/   macrophage cell		1.11111	CL:0000081	blood cell	1.0625	CL:0000235	macrophage	1.11111	CL:0000576	monocyte	0.75	CL:0000111	peripheral neuron									
peripheral blood, myeloblast cell		1.25	CL:0000081	blood cell	1.25	CL:0000835	myeloblast	0.75	CL:0000111	peripheral neuron												
peripheral blood, myeloblastic cell		1.25	CL:0000081	blood cell	1.25	CL:0000835	myeloblast	0.75	CL:0000111	peripheral neuron												
peripheral blood, pro B cell cell		1.36	CL:0000826	pro-B cell	1.25	UBERON:0000178	blood	0.75	CL:0000111	peripheral neuron												
peripheral blood,T lymphoblast, lymphoblast cell		1.16	CL:0000081	blood cell	0.722222	CL:0000230	T lymphoblast	0.75	CL:0000111	peripheral neuron												
peritoneal cells cell		1.25	CL:0000000	cell	0.75	CL:0000581	peritoneal macrophage															
peritoneal effusion, lymphoblast cell		1.0625	CL:0000000	cell	0.611111	CL:0000581	peritoneal macrophage	0.75	UBERON:0000175	pleural effusion	1	CL:0000229	lymphoblast									
peritoneal macrophage cell		1.44444	CL:0000581	peritoneal macrophage	2	CL:0000000	cell															
peritoneal macrophage, macrophage cell		1.44444	CL:0000581	peritoneal macrophage	2	CL:0000000	cell															
peritoneum (metastasis), epithelial cell		1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0002358	peritoneum	0.75	UBERON:0000446	septum of telencephalon												
peritoneum, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0002358	peritoneum												
pharynx, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0001042	pharynx															
pharynx, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0001042	pharynx												
pituitary cell		1.25	CL:0000000	cell	2	UBERON:0000007	pituitary gland															
pituitary tumor cell		1.11111	CL:0000000	cell	1.25	UBERON:0000007	pituitary gland															
pituitary tumor, epithelial cell		1.25	CL:0000066	epithelial cell	1.25	UBERON:0000007	pituitary gland															
pituitary tumor, small rounded cell		1.04	CL:0000000	cell	1.0625	UBERON:0000007	pituitary gland	0.611111	UBERON:0002108	small intestine	0.75	UBERON:0002502	round window									
pituitary tumor, small, rounded cell		1.04	CL:0000000	cell	1.0625	UBERON:0000007	pituitary gland	0.611111	UBERON:0002108	small intestine	0.75	UBERON:0002502	round window									
placenta cell		1.25	CL:0000000	cell	2	UBERON:0001987	placenta															
placenta, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0001987	placenta															
placenta, fibroblast cell	add	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0001987	placenta												
placenta, mixed cell	NA	1.11111	CL:0000000	cell	1.25	UBERON:0001987	placenta	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
pleura (metastasis), epithelial cell	cancer, add 	1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0000977	pleura	0.75	UBERON:0000446	septum of telencephalon												
pleural effusion cell	Uberon	1.44444	UBERON:0000175	pleural effusion	2	CL:0000000	cell															
pleural effusion (metastasis) cell	cancer, uberon	1.11111	UBERON:0000175	pleural effusion	1.0625	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon												
pleural effusion (metastasis), epithelial cell	cancer, add	1.08163	CL:0000066	epithelial cell	1.16	UBERON:0000175	pleural effusion	0.75	UBERON:0000446	septum of telencephalon												
pleural effusion (metastasis), fibroblast cell	cancer, add	1.08163	UBERON:0000175	pleural effusion	1.04	CL:0000000	cell	1.0625	CL:0000057	fibroblast	0.75	UBERON:0000446	septum of telencephalon									
pleural effusion (metastasis), floating   aggregates cell	aggregate cell is from slime-mold,	1.0625	CL:0000259	aggregate cell	1.11111	UBERON:0000175	pleural effusion	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0002239	floating rib									
pleural effusion (metastasis), lymphoblast cell	cancer, use add lymphocyte 	1.08163	UBERON:0000175	pleural effusion	1.04	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon	0.625	CL:0000229	lymphoblast									
pleural effusion (metastasis), pleomorphic with   multinucleated   component cells cell	cancer, multinucleate cell	1.04	CL:0000228	multinucleate cell	1.0625	UBERON:0000175	pleural effusion	0.611111	UBERON:0000446	septum of telencephalon	0.5625	UBERON:0000470	cell part	0.444444	coincides_with							
pleural effusion (metastasis), spherical cell		1.08163	UBERON:0000175	pleural effusion	1.04	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon	0.444444	UBERON:0000049	spherical lensed eye									
pleural effusion (metastasis), transformed cell		1.08163	UBERON:0000175	pleural effusion	1.04	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon												
pleural effusion (metastatic), lymphoblast cell	same as 473	1.08163	UBERON:0000175	pleural effusion	1.04	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon	0.625	CL:0000229	lymphoblast									
pleural effusion, spindle shaped cell		1.16	UBERON:0000175	pleural effusion	1.11111	CL:0000000	cell	0.75	UBERON:0003718	muscle spindle	0.444444	UBERON:0004198	comma-shaped body									
pre B cell cell		2	CL:0000817	precursor B cell																		
pre-B lymphoblast, lymphoblast cell		1.5625	CL:0000817	precursor B cell	1	CL:0000229	lymphoblast															
pre-B lymphoblast, lymphoblast cell		1.11111	CL:0000000	cell	0.625	CL:0000229	lymphoblast															
pre-B lymphoblast, suspension cell		1.36	CL:0000817	precursor B cell	0.625	CL:0000229	lymphoblast															
pre-B lymphoblast, suspension cell		1.0625	CL:0000000	cell	0.555556	CL:0000229	lymphoblast															
pre-tracheal region cell		1.0625	CL:0000000	cell	0.611111	UBERON:0000014	zone of skin	0.75	UBERON:0000379	tracheal mucosa	0.444444	CL:0000817	precursor B cell									
pre-tracheal region cell		1.11111	CL:0000000	cell	0.75	UBERON:0000014	zone of skin															
pro-B lymphoblast, lymphoblast cell		1.5625	CL:0000826	pro-B cell	1	CL:0000229	lymphoblast															
pro-B lymphoblast, lymphoblast cell		1.11111	CL:0000000	cell	0.625	CL:0000229	lymphoblast															
prostate cell		1.25	CL:0000000	cell	2	UBERON:0002367	prostate gland															
prostate (metastasis), epithelial cell		1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0002367	prostate gland	0.75	UBERON:0000446	septum of telencephalon												
prostate, endothelium, epithelial cell		1.25	CL:0000066	epithelial cell	1.25	UBERON:0001986	endothelium	2	UBERON:0002367	prostate gland												
prostate, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0002367	prostate gland															
prostate, epithelium, epithelial cell		1.25	CL:0000066	epithelial cell	2	UBERON:0000428	prostate epithelium															
prostate, spindle-shaped cell		1.0625	CL:0000000	cell	1.11111	UBERON:0002367	prostate gland	0.75	UBERON:0003718	muscle spindle	0.444444	UBERON:0004198	comma-shaped body									
prostate, spindle-shaped cell		1.11111	CL:0000000	cell	1.25	UBERON:0002367	prostate gland															
pulmonary artery, cobblestone cell		1.25	UBERON:0002012	pulmonary artery	1.25	CL:0000000	cell															
pulmonary artery, endothelial cell		1.3125	UBERON:0005317	pulmonary artery endothelial tube	2	CL:0000000	cell															
pulmonary artery, vascular endothelium, endothelial cell		1.11111	CL:0000115	endothelial cell	1.25	UBERON:0001917	endothelium of artery	0.75	UBERON:0002009	pulmonary nerve plexus	0.75	UBERON:0002049	vasculature									
pulmonary vein, endothelial cell		1.25	CL:0000115	endothelial cell	2	UBERON:0002016	pulmonary vein															
pupal ovary cell		1.11111	CL:0000000	cell	1.25	UBERON:0000992	ovary	0.75	UBERON:0000070	pupal stage												
pupal ovary, minced cell		1.0625	CL:0000000	cell	1.11111	UBERON:0000992	ovary	0.75	UBERON:0000070	pupal stage												
rectum cell		1.25	CL:0000000	cell	2	UBERON:0001052	rectum															
rectum, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0001052	rectum															
rectum, fetal cell		1.11111	CL:0000000	cell	1.25	UBERON:0001052	rectum	0.75	UBERON:0005630	fetal membrane												
rectum, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0001052	rectum												
rectum-anus cell		1.11111	CL:0000000	cell	1.25	UBERON:0001052	rectum	2	UBERON:0001245	anus												
rectum-anus cell		1.25	CL:0000000	cell																		
retina cell		1.25	CL:0000000	cell	2	UBERON:0000966	retina															
right axial lymph node cell		1.16	CL:0000363	axial cell	1.44444	UBERON:0000029	lymph node	0.75	UBERON:0001222	right ureter												
salivary duct cell		1.44444	UBERON:0001837	duct of salivary gland	2	CL:0000000	cell															
sarcoma cell		1.25	CL:0000000	cell																		
Schwann cell, neuronal cell		1.44444	CL:0000218	Schwann cell	2	CL:0000540	neuron															
skeletal muscle cell		2	CL:0000188	skeletal muscle cell																		
skeletal muscle, fetal, myoblast cell		1.36	CL:0000188	skeletal muscle cell	1.25	CL:0000056	myoblast	0.75	UBERON:0005630	fetal membrane												
skeletal muscle, fibroblast cell		1.5625	CL:0000188	skeletal muscle cell	2	CL:0000057	fibroblast															
skeletal muscle, myoblast cell		1.5625	CL:0000188	skeletal muscle cell	2	CL:0000056	myoblast															
skin cell		1.25	CL:0000000	cell	2	UBERON:0000014	zone of skin															
skin (dermis) cell		1.04	CL:0000000	cell	1.0625	UBERON:0000014	zone of skin	1.11111	UBERON:0002067	dermis	0.75	UBERON:0000446	septum of telencephalon									
skin (dermis), fibroblast cell		1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0000014	zone of skin	1.11111	UBERON:0002067	dermis	0.75	UBERON:0000446	septum of telencephalon						
skin (ear), mixed cell		1.11111	UBERON:0001459	skin of external ear	1.0625	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure									
skin (epidermis), epithelial cell		1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0000014	zone of skin	1.11111	UBERON:0001003	epidermis	0.75	UBERON:0000446	septum of telencephalon									
skin (epidermis), fibroblast cell		1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0000014	zone of skin	1.11111	UBERON:0001003	epidermis	0.75	UBERON:0000446	septum of telencephalon						
skin (foreskin), fibroblast cell		1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0000014	zone of skin	1.11111	UBERON:0001332	prepuce of penis	0.75	UBERON:0000446	septum of telencephalon						
skin (metastasis) cell		1.04	CL:0000000	cell	1.0625	UBERON:0000014	zone of skin	0.75	UBERON:0000446	septum of telencephalon												
skin (metastasis), epithelial cell		1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0000014	zone of skin	0.75	UBERON:0000446	septum of telencephalon												
skin (metastasis), polygonal cell		1.11111	CL:0000398	polygonal cell	1.0625	UBERON:0000014	zone of skin	0.75	UBERON:0000446	septum of telencephalon												
skin (scalp), fibroblast cell		1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0000014	zone of skin	1.11111	UBERON:0000403	scalp	0.75	UBERON:0000446	septum of telencephalon						
skin, embryonic cell		1.11111	CL:0000000	cell	1.25	UBERON:0000014	zone of skin	0.75	UBERON:0000068	embryo stage												
skin, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0000014	zone of skin															
skin, fetal, fibroblast cell		1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0000014	zone of skin	0.75	UBERON:0005630	fetal membrane									
skin, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000014	zone of skin												
skin, keratinocyte cell		1.11111	CL:0000000	cell	1.25	CL:0000312	keratinocyte	2	UBERON:0000014	zone of skin												
skin, keratinocyte, epithelial cell		1.25	CL:0000066	epithelial cell	1.25	CL:0000312	keratinocyte	2	UBERON:0000014	zone of skin												
skin, melanocyte, epithelial cell		1.25	CL:0000066	epithelial cell	1.25	CL:0000148	melanocyte	2	UBERON:0000014	zone of skin												
skin, melanocyte, spindle-shaped cell		1.04	CL:0000000	cell	1.0625	CL:0000148	melanocyte	1.11111	UBERON:0000014	zone of skin	0.75	UBERON:0003718	muscle spindle	0.444444	UBERON:0004198	comma-shaped body						
skin, melanocyte, spindle-shaped cell		1.0625	CL:0000000	cell	1.11111	CL:0000148	melanocyte	1.25	UBERON:0000014	zone of skin												
skin, melanocytic cell		1.11111	CL:0000000	cell	1.25	CL:0000148	melanocyte	2	UBERON:0000014	zone of skin												
skin, mixed cell		1.11111	CL:0000000	cell	1.25	UBERON:0000014	zone of skin	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
skin, polygonal cell		1.44444	CL:0000398	polygonal cell	2	UBERON:0000014	zone of skin															
skin, spindle-shaped cell		1.0625	CL:0000000	cell	1.11111	UBERON:0000014	zone of skin	0.75	UBERON:0003718	muscle spindle	0.444444	UBERON:0004198	comma-shaped body									
skin, spindle-shaped cell		1.11111	CL:0000000	cell	1.25	UBERON:0000014	zone of skin															
skin, stellate cell		1.44444	CL:0000122	stellate cell	2	UBERON:0000014	zone of skin															
small intestine, epithelial cell		1.3125	UBERON:0001902	epithelium of small intestine	2	CL:0000000	cell															
soft tissue (metastasis) cell		1.02778	CL:0000000	cell	1.04	UBERON:0000479	portion of tissue	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0001733	soft palate									
somatic cell hybrid, fibroblast cell		1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	0.75	UBERON:0000012	somatic nervous system												
spermatocyte, epithelial cell		1.44444	CL:0000066	epithelial cell	2	CL:0000017	spermatocyte															
spinal cord and roots cell		1.16	UBERON:0002240	spinal cord	1.11111	CL:0000000	cell	0.75	UBERON:0000329	hair root	0.3125	UBERON:0001035	socket									
spleen cell		1.25	CL:0000000	cell	2	UBERON:0002106	spleen															
spleen (metastasis), epithelial cell		1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0002106	spleen	0.75	UBERON:0000446	septum of telencephalon												
spleen (metastatic), epithelial cell		1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0002106	spleen	0.75	UBERON:0000446	septum of telencephalon												
spleen, amoeboid cell		1.44444	CL:0000732	amoeboid cell	2	UBERON:0002106	spleen															
spleen, B lymphocyte, lymphoblast cell		1.16	CL:0000236	B cell	1.11111	CL:0000542	lymphocyte	1.25	UBERON:0002106	spleen	1	CL:0000229	lymphoblast									
spleen, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0002106	spleen															
spleen, erythroblast, lymphoblast cell		1.0625	CL:0000000	cell	1.11111	CL:0000765	erythroblast	1.25	UBERON:0002106	spleen	1	CL:0000229	lymphoblast									
spleen, fetal cell		1.11111	CL:0000000	cell	1.25	UBERON:0002106	spleen	0.75	UBERON:0005630	fetal membrane												
spleen, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0002106	spleen												
spleen, lymphoblast cell		1.11111	CL:0000000	cell	1.25	UBERON:0002106	spleen	1	CL:0000229	lymphoblast												
spleen, lymphoblast, lymphoblast cell		1.11111	CL:0000000	cell	1.25	UBERON:0002106	spleen	1	CL:0000229	lymphoblast												
spleen, macrophage, macrophage cell		1.11111	CL:0000000	cell	1.25	CL:0000235	macrophage	2	UBERON:0002106	spleen												
spleen, mixed cell		1.11111	CL:0000000	cell	1.25	UBERON:0002106	spleen	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
spleen, monocyte/   macrophage cell		1.04	CL:0000000	cell	1.0625	CL:0000235	macrophage	1.11111	CL:0000576	monocyte	1.25	UBERON:0002106	spleen									
spleen, monocyte/ macrophage cell		1.04	CL:0000000	cell	1.0625	CL:0000235	macrophage	1.11111	CL:0000576	monocyte	1.25	UBERON:0002106	spleen									
sternum, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000975	vertebrate sternum												
stomach cell		1.25	CL:0000000	cell	2	UBERON:0000945	stomach															
stomach, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0000945	stomach															
stomach, mixed cell		1.11111	CL:0000000	cell	1.25	UBERON:0000945	stomach	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
subcutaneous (metastasis), epithelial cell		1.11111	CL:0000066	epithelial cell	0.75	UBERON:0000446	septum of telencephalon	0.75	UBERON:0002072	hypodermis												
subcutaneous connective tissue (areolar and   adipose), fibroblast cell		1.09	UBERON:0002190	subcutaneous adipose tissue	1.02041	CL:0000000	cell	1.02778	CL:0000057	fibroblast	1.04	connects	0.75	UBERON:0000446	septum of telencephalon	0.3125	UBERON:0001035	socket				
subcutaneous connective tissue (areolar and alveolar), fibroblast cell		1.04	UBERON:0002072	hypodermis	1.01562	CL:0000000	cell	1.02041	CL:0000057	fibroblast	1.02778	connects	0.66	UBERON:0000446	septum of telencephalon	0.611111	CL:0000583	alveolar macrophage	0.3125	UBERON:0001035	socket	
subcutaneous connective tissue, areolar and   adipose, fibroblast cell		1.14062	UBERON:0002190	subcutaneous adipose tissue	1.04	CL:0000000	cell	1.0625	CL:0000057	fibroblast	1.11111	connects	0.3125	UBERON:0001035	socket							
subcutaneous connective tissue, fibroblast cell		1.16	UBERON:0002072	hypodermis	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	connects										
subcutaneous nodule cell		1.11111	CL:0000000	cell	0.75	UBERON:0000444	lymphoid follicle	0.75	UBERON:0002072	hypodermis												
sublingual salivary gland cell		1.25	UBERON:0001044	salivary gland	1.25	CL:0000000	cell	0.75	UBERON:0001611	sublingual artery												
submandibular lymph node, fibroblast cell		1.36	UBERON:0002520	submandibular lymph node	1.25	CL:0000000	cell	2	CL:0000057	fibroblast												
submandibular salivary gland, fibroblast cell		1.16	UBERON:0001044	salivary gland	1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	0.75	UBERON:0001736	submandibular gland									
submaxillary salivary gland, epithelial cell		1.16	CL:0000066	epithelial cell	1.44444	UBERON:0001044	salivary gland	0.375	UBERON:0001736	submandibular gland												
supraorbital area (metastasis), epithelial cell		1.08163	CL:0000066	epithelial cell	0.96	UBERON:0001149	bare area of liver	0.75	UBERON:0001654	supra-orbital vein												
supraorbital area (metastasis), fibroblast cell		1.02041	CL:0000000	cell	1.02778	CL:0000057	fibroblast	0.96	UBERON:0001149	bare area of liver	0.75	UBERON:0001654	supra-orbital vein									
synovium, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0002018	synovial membrane												
synovium, mixed cell		1.11111	CL:0000000	cell	1.25	UBERON:0002018	synovial membrane	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
T lymphoblast, lymphoblast cell		1.44444	CL:0000084	T cell	1	CL:0000229	lymphoblast															
T lymphocyte, cutaneous, lymphoblast cell		1.16	CL:0000084	T cell	1.11111	CL:0000542	lymphocyte	0.75	UBERON:0000021	cutaneous appendage	1	CL:0000229	lymphoblast									
T lymphocyte, lymphoblast cell		1.25	CL:0000084	T cell	1.25	CL:0000542	lymphocyte	1	CL:0000229	lymphoblast												
tail cell		1.25	CL:0000000	cell	2	UBERON:0002415	tail															
testis cell		1.25	CL:0000000	cell	2	UBERON:0000473	testis															
testis, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0000473	testis															
testis, fetal, epithelial cell		1.25	CL:0000066	epithelial cell	1.25	UBERON:0000473	testis	0.75	UBERON:0005630	fetal membrane												
testis, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000473	testis												
testis, flattened colonies   on coated surfaces cell		1.02041	CL:0000000	cell	1.02778	UBERON:0000473	testis	0.54	UBERON:0000076	external ectoderm	0.5625	UBERON:0001037	hair	0.444444	CL:0000749	ON-bipolar cell	0.24	CL:0000050	megakaryocyte erythroid progenitor cell			
testis, Leydig cells cell		1.44444	CL:0000178	Leydig cell	2	UBERON:0000473	testis															
testis, mixed cell		1.11111	CL:0000000	cell	1.25	UBERON:0000473	testis	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
testis, Sertoli cells cell		1.44444	CL:0000216	Sertoli cell	2	UBERON:0000473	testis															
thoracic aorta, fibroblast cell		1.25	UBERON:0001515	thoracic aorta	1.25	CL:0000000	cell	2	CL:0000057	fibroblast												
thoracic aorta, medial layer, myoblast cell		1.11111	UBERON:0000119	cell layer	1.25	UBERON:0001515	thoracic aorta	1.25	CL:0000056	myoblast	0.75	UBERON:0001452	medial cuneiform bone									
thoracic duct (metastasis), spherical cell		1.08163	UBERON:0001631	thoracic duct	1.04	CL:0000000	cell	0.75	UBERON:0000446	septum of telencephalon	0.444444	UBERON:0000049	spherical lensed eye									
thymus cell		1.25	CL:0000000	cell	2	UBERON:0002370	thymus															
thymus, embryonic cell		1.11111	CL:0000000	cell	1.25	UBERON:0002370	thymus	0.75	UBERON:0000068	embryo stage												
thymus, fetal cell		1.11111	CL:0000000	cell	1.25	UBERON:0002370	thymus	0.75	UBERON:0005630	fetal membrane												
thymus, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0002370	thymus												
thymus, lymphoblast cell		1.11111	CL:0000000	cell	1.25	UBERON:0002370	thymus	1	CL:0000229	lymphoblast												
thymus, mixed cell		1.11111	CL:0000000	cell	1.25	UBERON:0002370	thymus	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
thymus,T and B cell characteristics, lymphoblast cell		1.08163	CL:0000084	T cell	1.04	UBERON:0002370	thymus	0.625	CL:0000231	B lymphoblast	0.3125	UBERON:0001035	socket									
thymus,T lymphocyte, lymphoblast cell		1.16	CL:0000084	T cell	1.11111	CL:0000542	lymphocyte	1.25	UBERON:0002370	thymus	1	CL:0000229	lymphoblast									
thyroid cell		1.25	CL:0000000	cell	2	UBERON:0002046	thyroid gland															
thyroid, embryonic cell		1.11111	CL:0000000	cell	1.25	UBERON:0002046	thyroid gland	0.75	UBERON:0000068	embryo stage												
thyroid, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0002046	thyroid gland															
thyroid, follicular cell		1.11111	CL:0000000	cell	1.25	UBERON:0002046	thyroid gland	0.75	UBERON:0000038	follicular fluid												
thyroid, medullary cell		1.11111	CL:0000000	cell	1.25	UBERON:0002046	thyroid gland	0.75	UBERON:0005159	pyramid of medulla oblongata												
thyroid, papillary cell		1.11111	CL:0000000	cell	1.25	UBERON:0002046	thyroid gland	0.75	UBERON:0001992	papillary layer of dermis												
tongue cell		1.25	CL:0000000	cell	2	UBERON:0001723	tongue															
tongue, embryonic cell		1.11111	CL:0000000	cell	1.25	UBERON:0001723	tongue	0.75	UBERON:0000068	embryo stage												
tongue, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0001723	tongue															
tongue, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0001723	tongue												
tonsil cell		1.25	CL:0000000	cell	2	UBERON:0002372	tonsil															
tonsil, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0002372	tonsil												
trachea cell		1.25	CL:0000000	cell	2	UBERON:0003126	trachea															
trachea, embryonic cell		1.11111	CL:0000000	cell	1.25	UBERON:0003126	trachea	0.75	UBERON:0000068	embryo stage												
trachea, fetal, fibroblast cell		1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0003126	trachea	0.75	UBERON:0005630	fetal membrane									
trachea, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0003126	trachea												
trophoblast cell		2	CL:0000351	trophoblast cell																		
tumor, adenovirus-12 induced, fibroblast cell		1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	0.5625	CL:0000902	induced T-regulatory cell	0.123457	UBERON:0003038	thoracic spinal cord									
tumor, adenovirus-12 induced, fibroblast cell		1.04	CL:0000000	cell	1.0625	CL:0000057	fibroblast	0.611111	CL:0000902	induced T-regulatory cell												
turbinate cell		1.25	CL:0000000	cell	2	UBERON:0001762	nasal concha															
umbilical cord cell		1.44444	UBERON:0002331	umbilical cord	2	CL:0000000	cell															
umbilical vein, endothelial cell		1.25	CL:0000115	endothelial cell	2	UBERON:0002066	umbilical vein															
umbilical vein, smooth muscle, fibroblast cell		1.25	CL:0000192	smooth muscle cell	1.44444	UBERON:0002066	umbilical vein	2	CL:0000057	fibroblast												
umbilical vein, vascular endothelium, endothelial cell		1.11111	CL:0000115	endothelial cell	1.25	UBERON:0001919	endothelium of vein	0.75	UBERON:0001310	umbilical artery	0.75	UBERON:0002049	vasculature									
unknown cell		1.25	CL:0000000	cell																		
unknown, epithelial cell		1.44444	CL:0000066	epithelial cell																		
unknown, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast															
unknown, lymphoblast cell		1.11111	CL:0000000	cell	0.625	CL:0000229	lymphoblast															
unknown, lymphoblast cell		1.11111	CL:0000000	cell	0.625	CL:0000229	lymphoblast															
unknown, possibly kidney cell		1.0625	CL:0000000	cell	1.11111	UBERON:0002113	kidney															
unknown, possibly skin cell		1.0625	CL:0000000	cell	1.11111	UBERON:0000014	zone of skin															
unknown, possibly whole embryo cell		1.04	CL:0000000	cell	1.0625	UBERON:0000922	embryo	0.611111	UBERON:0000468	multi-cellular organism												
upper maxilla, lymphoblast cell		1.0625	CL:0000000	cell	1.11111	UBERON:0002397	maxilla	0.75	UBERON:0000376	hindlimb stylopod	1	CL:0000229	lymphoblast									
ureter cell		1.25	CL:0000000	cell	2	UBERON:0000056	ureter															
ureter (uroepithelium), epithelial cell		1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0000056	ureter	1.11111	UBERON:0000365	urothelium	0.75	UBERON:0000446	septum of telencephalon									
ureter, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0000056	ureter															
urethra, mixed cell		1.11111	CL:0000000	cell	1.25	UBERON:0000057	urethra	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
urinary bladder, adherent cell		1.25	UBERON:0001255	urinary bladder	1.25	CL:0000000	cell															
urinary bladder, epithelial cell		1.25	CL:0000066	epithelial cell	2	UBERON:0001255	urinary bladder															
urinary bladder, fibroblast cell		1.25	UBERON:0001255	urinary bladder	1.25	CL:0000000	cell	2	CL:0000057	fibroblast												
uterus cell		1.25	CL:0000000	cell	2	UBERON:0000995	uterus															
uterus (endometrium) cell		1.04	CL:0000000	cell	1.0625	UBERON:0000995	uterus	1.11111	UBERON:0001295	endometrium	0.75	UBERON:0000446	septum of telencephalon									
uterus (endometrium), epithelial cell		1.11111	CL:0000066	epithelial cell	1.0625	UBERON:0000995	uterus	1.11111	UBERON:0001295	endometrium	0.75	UBERON:0000446	septum of telencephalon									
uterus (endometrium), fibroblast cell		1.02778	CL:0000000	cell	1.04	CL:0000057	fibroblast	1.0625	UBERON:0000995	uterus	1.11111	UBERON:0001295	endometrium	0.75	UBERON:0000446	septum of telencephalon						
uterus, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0000995	uterus															
uterus, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000995	uterus												
vagina cell		1.25	CL:0000000	cell	2	UBERON:0000996	vagina															
vagina, mucosa, epithelial cell		1.25	CL:0000066	epithelial cell	2	UBERON:0004983	mucosa of vagina															
variant of human embryonic stem cell line BG01, spherical colony cell		1.04	CL:0000010	cell line cell	0.515625	CL:0000034	stem cell	0.520408	UBERON:0000068	embryo stage	0.361111	UBERON:0000049	spherical lensed eye	0.373333	UBERON:0002440	inferior cervical ganglion	0.24	CL:0000050	megakaryocyte erythroid progenitor cell			
vertebral column, mixed cell		1.25	UBERON:0001130	vertebral column	1.25	CL:0000000	cell	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure												
visceral pleura, epithelial cell		1.25	CL:0000066	epithelial cell	2	UBERON:0002401	visceral pleura															
vulva cell		1.25	CL:0000000	cell	2	UBERON:0000997	vulva															
vulva, epithelial cell		1.44444	CL:0000066	epithelial cell	2	UBERON:0000997	vulva															
vulva, fibroblast cell		1.11111	CL:0000000	cell	1.25	CL:0000057	fibroblast	2	UBERON:0000997	vulva												
whole embryo, fibroblast cell		1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0000922	embryo	0.75	UBERON:0000468	multi-cellular organism									
whole embryo, fibroblast cell		1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0000922	embryo	0.75	UBERON:0000468	multi-cellular organism									
whole fetus cell		1.11111	CL:0000000	cell	1.25	UBERON:0000323	fetus	0.75	UBERON:0000468	multi-cellular organism												
whole fetus, fibroblast cell		1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0000323	fetus	0.75	UBERON:0000468	multi-cellular organism									
whole fetus, mixed cell		1.0625	CL:0000000	cell	1.11111	UBERON:0000323	fetus	0.75	UBERON:0000468	multi-cellular organism	0.194444	UBERON:0000077	mixed endoderm/mesoderm-derived structure									
whole fetus, spindle to stellate cell		1.11111	CL:0000122	stellate cell	1.0625	UBERON:0000323	fetus	0.611111	UBERON:0000468	multi-cellular organism	0.75	UBERON:0003718	muscle spindle									
whole fry, fibroblast cell		1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	0.75	UBERON:0000468	multi-cellular organism												
whole larva cell		1.11111	CL:0000000	cell	1.25	UBERON:0002548	larva	0.75	UBERON:0000468	multi-cellular organism												
whole larva, fibroblast cell		1.0625	CL:0000000	cell	1.11111	CL:0000057	fibroblast	1.25	UBERON:0002548	larva	0.75	UBERON:0000468	multi-cellular organism									
yolk sac, endothelial cell		1.25	CL:0000115	endothelial cell	2	UBERON:0001040	yolk sac															
yolk sac, parietal endoderm, epithelial cell		1.25	UBERON:0003257	endoderm of yolk sac	1.44444	CL:0000066	epithelial cell	0.75	CL:0000162	parietal cell												';




$lines = preg_split('/[\r\n]+/', $strInput);

$annotations=array();
$terms=array();

foreach ($lines as $line) {
	$tokens = preg_split('/\t/', $line);
	
	//print_r($tokens);
	
	for($i=3; $i<=15; $i+=3) {
	
		if ($tokens[$i]!='') {
			$term_id=$tokens[$i];
			$annotations[$term_id]['Cell or tissue: '.trim($tokens[0]) . '(score: '.$tokens[$i-1].')']=1;
			
			if (!isset($terms[$term_id])) {
				$terms[$term_id] = trim($tokens[$i+1]);
			}
		}
	}
}

foreach ($annotations as $term_id => $annotation) {
	if (strpos($term_id, 'UBERON')!==false) {
		$term_id=str_replace('UBERON:', '', $term_id);
?>
<rdf:Description rdf:about="http://purl.obolibrary.org/obo/UBERON_<?php echo $term_id?>">
	<rdfs:comment><?php echo join(', ', array_keys($annotation))?></rdfs:comment>
</rdf:Description>
<?php 
	}
	else {
		$term_id=str_replace('CL:', '', $term_id);
?>
<rdf:Description rdf:about="http://purl.obolibrary.org/obo/CL_<?php echo $term_id?>">
	<rdfs:comment><?php echo join(', ', array_keys($annotation))?></rdfs:comment>
</rdf:Description>
<?php 
	}
}

foreach ($terms as $term_id => $label) {
	if (strpos($term_id, 'UBERON')!==false) {
		$term_id=str_replace('UBERON:', '', $term_id);
?>
http://purl.obolibrary.org/obo/UBERON_<?php echo $term_id?> #<?php echo $label?>

<?php 
	}
}


foreach ($terms as $term_id => $label) {
	if (strpos($term_id, 'CL')!==false) {
		$term_id=str_replace('CL:', '', $term_id);
?>
http://purl.obolibrary.org/obo/CL_<?php echo $term_id?> #<?php echo $label?>

<?php 
	}
}
?>