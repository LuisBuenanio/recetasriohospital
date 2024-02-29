<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario008', function (Blueprint $table) {
            /*Datos Generales*/
            
            
            $table->id();
            $table->string('n_institucion')->nullable();
            $table->string('n_unidad_ope')->nullable();
            $table->string('codigo',10)->nullable();
            $table->string('provincia')->nullable();
            $table->string('canton')->nullable();
            $table->string('parroquia')->nullable();
            $table->string('historia_clinica',10)->nullable(); 

            /*1. Registro de Admición*/ 

            $table->enum('seguro_salud', ['iess', 'otro'])->nullable();
            $table->date('fecha_atencion')->nullable(); 
            $table->time('hora_atencion')->nullable();
            $table->string('per_notific_nombre')->nullable();
            $table->string('per_notific_parentesco', 50)->nullable();  
            $table->string('per_notific_direccion', 100)->nullable();           
            $table->string('per_notific_telefono', 10)->nullable();
            
            $table->string('acompa_nombre')->nullable();
            $table->string('acompa_cedula')->nullable();            
            $table->string('acompa_direccion')->nullable();      
            $table->string('acompa_telefono')->nullable();

            $table->enum('forma_llegada', ['Ambulatorio', 'Silla de Ruedas', 'Camilla'])->nullable();
            $table->string('fuente_informacion')->nullable(); 
            $table->string('institucion_pers_entrega')->nullable(); 
            $table->string('telefono_pers_entrega')->nullable(); 
            
            /*2. Inicio de Atención*/            
            $table->time('hora_llegada')->nullable();
            $table->enum('via_aerea_libre', ['Si', 'No'])->nullable();
            $table->enum('via_aerea_obstruida', ['Si', 'No'])->nullable();             
            $table->string('grupo_rh')->nullable(); 
            $table->enum('condicion_llegada', ['Estable', 'Inestable', 'Otro'])->nullable();
            $table->longText('motivo_llegada')->nullable(); 

            /*3. Accidente, violencia, intoxicación*/

            $table->string('lugar_evento')->nullable(); 
            $table->string('direccion_evento')->nullable(); 
            $table->date('fecha_evento')->nullable(); 
            $table->time('hora_evento')->nullable(); 
            $table->string('vehiculo_arma')->nullable(); 
            $table->enum('tipo_evento', ['Accidente', 'Envenenamiento', 'Violencia', 'Otro'])->nullable();
            
            $table->string('autoridad_competente')->nullable(); 
            $table->time('hora_denuncia')->nullable(); 
            $table->enum('custodia_policial', ['Si', 'No'])->nullable();            
            $table->longtext('observaciones')->nullable();


            /*ESTO ESTA MAL DE LA INTOXICACION */ 
            $table->enum('aliento_etilico', ['Si', 'No'])->nullable();
            $table->string('valor_alcochekc')->nullable();
            $table->time('hora_examen')->nullable(); 
            $table->enum('alcoholemia', ['Si', 'No'])->nullable();
            $table->enum('otras_sustancias1', ['Si', 'No'])->nullable();
            $table->enum('otras_sustancias2', ['Si', 'No'])->nullable();
            $table->enum('v_sospecha', ['Si', 'No'])->nullable();
            $table->enum('v_abuso_fisico', ['Si', 'No'])->nullable();
            $table->enum('v_abuso_psicologico', ['Si', 'No'])->nullable();
            $table->enum('v_abuso_sexual', ['Si', 'No'])->nullable();            
           $table->longtext('obser_intoxi_violen')->nullable(); 
            $table->enum('quemaduras', ['grado i', 'grado ii', 'grado iii'])->nullable();           
            $table->string('porcent_superficie')->nullable();          
            $table->string('picadura')->nullable();          
            $table->string('mordedura')->nullable();

            /*  4. ANTECEDENTES PERSONALES Y FAMILIARES RELEVANTES*/ 

            $table->enum('alergicos', ['personal', 'familiar'])->nullable(); 
            
            $table->enum('clinicos', ['personal', 'familiar'])->nullable(); 
            $table->enum('ginecologicos', ['personal', 'familiar'])->nullable(); 
            $table->enum('traumatologicos', ['personal', 'familiar'])->nullable(); 
            $table->enum('pediatricos', ['personal', 'familiar'])->nullable(); 
            $table->enum('quirurgicos', ['personal', 'familiar'])->nullable(); 
            $table->enum('farmacologico', ['personal', 'familiar'])->nullable(); 
            $table->enum('otros', ['personal', 'familiar'])->nullable();           
            $table->longtext('obser_antec_personales')->nullable();  
            
            /* 5. ENFERMEDAD ACTUAL Y REVISION DE SISTEMA*/               
            $table->longtext('enf_actual_sistemas')->nullable(); 

            /* 6. CARACTERISTICAS DEL DOLOR*/               
            $table->string('region_anatomica_1')->nullable(); 
            $table->string('punto_doloroso_1')->nullable();
            $table->enum('evolucion_1', ['agudo', 'sub agudo', 'cronico'])->nullable(); 
            $table->enum('tipo_1', ['episodico', 'continuo', 'colico'])->nullable();  
            $table->enum('modificaciones_1', ['posicion', 'ingesta', 'esfuerzo', 'digito presion', 'se irradia'])->nullable();  
            $table->enum('alivia_con_1', ['antiespasmodico', 'opiaceo', 'aine', 'no alivia'])->nullable();  
            $table->enum('intensidad_1', ['leve', 'moderado', 'grave'])->nullable();  

            $table->string('region_anatomica_2')->nullable(); 
            $table->string('punto_doloroso_2')->nullable();
            $table->enum('evolucion_2', ['agudo', 'sub agudo', 'cronico'])->nullable(); 
            $table->enum('tipo_2', ['episodico', 'continuo', 'colico'])->nullable();  
            $table->enum('modificaciones_2', ['posicion', 'ingesta', 'esfuerzo', 'digito presion', 'se irradia'])->nullable();  
            $table->enum('alivia_con_2', ['antiespasmodico', 'opiaceo', 'aine', 'no alivia'])->nullable();  
            $table->enum('intensidad_2', ['leve', 'moderado', 'grave'])->nullable();  

            $table->string('region_anatomica_3')->nullable(); 
            $table->string('punto_doloroso_3')->nullable();
            $table->enum('evolucion_3', ['agudo', 'sub agudo', 'cronico'])->nullable(); 
            $table->enum('tipo_3', ['episodico', 'continuo', 'colico'])->nullable();  
            $table->enum('modificaciones_3', ['posicion', 'ingesta', 'esfuerzo', 'digito presion', 'se irradia'])->nullable();  
            $table->enum('alivia_con_3', ['antiespasmodico', 'opiaceo', 'aine', 'no alivia'])->nullable();  
            $table->enum('intensidad_3', ['leve', 'moderado', 'grave'])->nullable();  

            /* 7. SIGNOS VITALES, MEDICIONES Y VALORES */
            $table->string('presion_arterial')->nullable(); 
            $table->string('frecuencia_cardiaca')->nullable();             
            $table->string('frecuencia_respiratoria')->nullable(); 
            $table->string('temperatura_bucal')->nullable(); 
            $table->string('temperatura_axilar')->nullable(); 
            $table->string('peso', 10)->nullable();             
            $table->string('talla', 10)->nullable();    
            $table->string('glasgow_ocular')->nullable(); 
            $table->string('glasgow_verbal')->nullable(); 
            $table->string('glasgow_motora')->nullable(); 
            $table->string('glasgow_total')->nullable(); 
            $table->string('rec_pupila_derecha')->nullable(); 
            $table->string('rec_pupila_izquierda')->nullable();             
            $table->string('tej_llenado_capilar')->nullable(); 
            $table->string('perimetro_cefalico', 10)->nullable(); 


            /*  8.EXAMEN FISICO */
            $table->enum('r_piel_faneras', ['CP', 'SP'])->nullable();  
            $table->enum('r_cabeza', ['CP', 'SP'])->nullable(); 
            $table->enum('r_ojos', ['CP', 'SP'])->nullable(); 
            $table->enum('r_oidos', ['CP', 'SP'])->nullable(); 
            $table->enum('r_nariz', ['CP', 'SP'])->nullable(); 
            $table->enum('r_boca', ['CP', 'SP'])->nullable(); 
            $table->enum('r_oro_faringe', ['CP', 'SP'])->nullable(); 
            $table->enum('r_cuello', ['CP', 'SP'])->nullable(); 
            $table->enum('r_axilas_mamas', ['CP', 'SP'])->nullable(); 
            $table->enum('r_torax', ['CP', 'SP'])->nullable(); 
            $table->enum('r_abdomen', ['CP', 'SP'])->nullable(); 
            $table->enum('r_columna_vertebral', ['CP', 'SP'])->nullable(); 
            $table->enum('r_ingle_perine', ['CP', 'SP'])->nullable(); 
            $table->enum('r_miembros_superiores', ['CP', 'SP'])->nullable(); 
            $table->enum('r_miembros_inferiores', ['CP', 'SP'])->nullable(); 


           
            $table->enum('s_organos_sentidos', ['CP', 'SP'])->nullable(); 
            $table->enum('s_respiratorio', ['CP', 'SP'])->nullable(); 
            $table->enum('s_cardiovascular', ['CP', 'SP'])->nullable(); 
            $table->enum('s_digestivo', ['CP', 'SP'])->nullable(); 
            $table->enum('s_genital', ['CP', 'SP'])->nullable(); 
            $table->enum('s_urinario', ['CP', 'SP'])->nullable(); 
            $table->enum('s_musculo_esqueletico', ['CP', 'SP'])->nullable(); 
            $table->enum('s_endocrino', ['CP', 'SP'])->nullable(); 
            $table->enum('s_hemolinfatico', ['CP', 'SP'])->nullable(); 
            $table->enum('s_neurologico', ['CP', 'SP'])->nullable(); 
            
            $table->longtext('obser_examen_fisico')->nullable();

        /*  se utiliza set para elegir varios valores y se utiliza enum para esojer solo 1 */
            /* 9. DIAGRAMA TOPOGRAFICA */

           
            /* 10 EMBARAZO - PARTO */

            $table->integer('gestas')->nullable(); 
            $table->integer('partos')->nullable(); 
            $table->integer('abortos')->nullable(); 
            $table->integer('cesareas')->nullable();              
            $table->date('fecha_ult_mestruacion')->nullable();  
            $table->integer('semanas_gestacion')->nullable();             
            $table->string('movimiento_fetal')->nullable(); 
            $table->string('frecuencia_card_fetal')->nullable(); 
            $table->string('membranas_rota')->nullable(); 
            $table->string('tiempo_membranas_rota')->nullable();            
            $table->string('altura_uterina')->nullable();            
            $table->string('presentacion')->nullable();             
            $table->string('dilatacion')->nullable(); 
            $table->string('borramiento')->nullable();             
            $table->string('plano')->nullable();             
            $table->string('pelvis_util')->nullable();            
            $table->string('sangrado_vaginal')->nullable();            
            $table->string('contracciones')->nullable();  
            $table->longtext('obser_embarazo_parto')->nullable(); 
                

            /* 11. ANALISIS DE PROBLEMAS */                        
            $table->longtext('analisis_problemas')->nullable(); 

            /* 12. PLAN DIAGNOSTICO */  
            
            $table->enum('biometria', ['Si', 'No'])->nullable();            
            $table->enum('quimica_sanguinea', ['Si', 'No'])->nullable();
            $table->enum('gasometria', ['Si', 'No'])->nullable();
            $table->enum('endoscopia', ['Si', 'No'])->nullable();
            $table->enum('radiografia_abdomen', ['Si', 'No'])->nullable();
            $table->enum('tomografia', ['Si', 'No'])->nullable();
            $table->enum('ecografia_pelvica', ['Si', 'No'])->nullable();
            $table->enum('interconsulta_especializada', ['Si', 'No'])->nullable();
            $table->enum('uroanalisis', ['Si', 'No'])->nullable();
            $table->enum('electrolitos', ['Si', 'No'])->nullable();
            $table->enum('electrocardiograma', ['Si', 'No'])->nullable();
            $table->enum('r_x_torax', ['Si', 'No'])->nullable();
            $table->enum('r_x_osea', ['Si', 'No'])->nullable();
            $table->enum('resonancia', ['Si', 'No'])->nullable();
            $table->enum('ecografia_abdominal', ['Si', 'No'])->nullable();
            $table->enum('pd_otros', ['Si', 'No'])->nullable();      
            

                
                
            /*  15. PLAN DE TRATAMIENTO */

            
            $table->enum('pt_indicaciones_generales', ['Si', 'No'])->nullable();             
            $table->enum('pt_procedimientos', ['Si', 'No'])->nullable();             
            $table->enum('pt_consentimiento_informado', ['Si', 'No'])->nullable();
            $table->enum('pt', ['Si', 'No'])->nullable(); 
           
            $table->string('medicamento_generico_1', 50)->nullable();
            $table->enum('via_1', ['intravenoso','via_vaginal', 'via_oral','intramuscular','via rectal','subcutanea','sublingual', 'via topica', 'via vaginal', 'via oftalmica', 'via optica'])->nullable(); 
            $table->string('dosis_1', 50)->nullable();           
            $table->string('posologia_1', 50)->nullable();        
            $table->string('dias_1',10)->nullable(); 
            $table->string('obser_plan_tratamiento_1', 100)->nullable(); 



            $table->string('medicamento_generico_2', 50)->nullable();
            $table->enum('via_2', ['intravenoso','via_vaginal', 'via_oral','intramuscular','via rectal','subcutanea','sublingual', 'via topica', 'via vaginal', 'via oftalmica', 'via optica'])->nullable(); 
            $table->string('dosis_2', 50)->nullable();           
            $table->string('posologia_2', 50)->nullable();         
            $table->string('dias_',10)->nullable(); 
            $table->string('obser_plan_tratamiento_2', 100)->nullable();

            $table->string('medicamento_generico_3', 50)->nullable();
            $table->enum('via_3', ['intravenoso','via_vaginal', 'via_oral','intramuscular','via rectal','subcutanea','sublingual', 'via topica', 'via vaginal', 'via oftalmica', 'via optica'])->nullable(); 
            $table->string('dosis_3', 50)->nullable();           
            $table->string('posologia_3', 50)->nullable();                  
            $table->string('dias_3',10)->nullable();    
            $table->string('obser_plan_tratamiento_3', 100)->nullable();

            
            $table->string('medicamento_generico_4', 50)->nullable();
            $table->enum('via_4', ['intravenoso','via_vaginal', 'via_oral','intramuscular','via rectal','subcutanea','sublingual', 'via topica', 'via vaginal', 'via oftalmica', 'via optica'])->nullable(); 
            $table->string('dosis_4', 50)->nullable();           
            $table->string('posologia_4', 50)->nullable();     
            $table->string('dias_4',10)->nullable(); 
            $table->string('obser_plan_tratamiento_4', 100)->nullable();
                
            /*  16. SALIDA */
            $table->enum('salida',['domicilio', 'consulta externa','observacion', 'internacion','referencia','vivo','estable','inestable','muerto en emergencia'])->nullable();  
            $table->enum('estado_salida',['vivo','estable','inestable'])->nullable();  
               
            $table->integer('dias_incapacidad')->nullable();   
            $table->string('servicio')->nullable();   
            $table->string('establecimiento')->nullable();
            $table->enum('muertO_emergencia',['Si', 'No'])->nullable();  
            
            $table->string('causa_muerte')->nullable();                
            $table->date('fecha_salida')->nullable();  
            $table->time('hora_salida')->nullable();    
            $table->string('medico_salida')->nullable(); 
            $table->string('codigo_salida')->nullable();  

            /* 13. DIAGNOSTICO PRESUNTIVOS y 14 DIAGNÓSTICOS DEFINITIVOS */
            //RELACION HACIA LOS CIE-10
            /* $table->unsignedBigInteger('diagnosticoscie10_id');
            $table->foreign('diagnosticoscie10_id')
                    ->references('id')
                    ->on('diagnosticoscie10')
                    ->onDelete('restrict');  
 */

            //RELACION HACIA LOS MEDICOS
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('restrict');       
            


            //RELACION HACIA LOS PACIENTES
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')
                    ->references('id')
                    ->on('paciente')
                    ->onDelete('restrict')->nullable();  

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formulario008');
    }
};
