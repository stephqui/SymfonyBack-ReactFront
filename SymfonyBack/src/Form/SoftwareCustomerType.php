<?php

namespace App\Form;

use App\Entity\Software;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SoftwareCustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code_produit')
            ->add('statut')
            ->add('version')
            ->add('code_client')
            ->add('nom_du_client')
            ->add('detail_version')
            ->add('logiciel')
            ->add('gamme')
            ->add('nombre_poste')
            ->add('licence')
            ->add('cle_web')
            ->add('type_installation')
            ->add('cle_pc')
            ->add('libelle')
            ->add('date_maj', null, [
                'widget' => 'single_text'
            ])
            ->add('mode')
            ->add('technologie')
            ->add('serveur')
            ->add('nom_serveur')
            ->add('serveur_chez_nous')
            ->add('ebp_sur_serveur')
            ->add('version_sql')
            ->add('repertoire_dossier_partage')
            ->add('repertoire_sauvegarde')
            ->add('nom_contact_livraison')
            ->add('prenom_livraison')
            ->add('telephone_fixe_livraison')
            ->add('telephone_portable_livraison')
            ->add('adresse1_livraison')
            ->add('code_postal_livraison')
            ->add('ville_livraison')
            ->add('notes')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Software::class,
        ]);
    }
}
