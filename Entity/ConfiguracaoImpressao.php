<?php

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\Entity;

class ConfiguracaoImpressao implements \JsonSerializable
{
    /**
     * @var Unidade
     */
    private $unidade;
    
    /**
     * @var string
     */
    private $cabecalho;
    
    /**
     * @var string
     */
    private $rodape;
    
    /**
     * @var bool
     */
    private $exibirNomeServico;
    
    /**
     * @var bool
     */
    private $exibirNomeUnidade;
    
    /**
     * @var bool
     */
    private $exibirMensagemServico;
    
    /**
     * @var bool
     */
    private $exibirData;
    
    /**
     * @var bool
     */
    private $exibirPrioridade;
    
     /**
     * @var bool
     */
    private $exibirId;
    
    public function __construct(Unidade $unidade)
    {
        $this->unidade    = $unidade;
        $this->cabecalho  = 'Novo SGA';
        $this->rodape     = 'Novo SGA';
        $this->exibirData = true;
        $this->exibirMensagemServico = true;
        $this->exibirNomeServico     = true;
        $this->exibirNomeUnidade     = true;
        $this->exibirPrioridade      = true;
        $this->exibirId              = true;
    }
    
    public function getExibirId()
    {
        return $this->exibirId;
    }
    
    public function getUnidade()
    {
        return $this->unidade;
    }

    public function getCabecalho()
    {
        return $this->cabecalho;
    }

    public function getRodape()
    {
        return $this->rodape;
    }

    public function getExibirNomeServico()
    {
        return $this->exibirNomeServico;
    }

    public function getExibirNomeUnidade()
    {
        return $this->exibirNomeUnidade;
    }

    public function getExibirMensagemServico()
    {
        return $this->exibirMensagemServico;
    }

    public function getExibirData()
    {
        return $this->exibirData;
    }

    public function getExibirPrioridade()
    {
        return $this->exibirPrioridade;
    }
    
    public function setExibirId($exibirId)
    {
        $this->exibirId = $exibirId;
        return $this;
    }

    public function setUnidade(Unidade $unidade): self
    {
        $this->unidade = $unidade;

        return $this;
    }

    public function setCabecalho($cabecalho): self
    {
        $this->cabecalho = $cabecalho;

        return $this;
    }

    public function setRodape($rodape): self
    {
        $this->rodape = $rodape;

        return $this;
    }

    public function setExibirNomeServico($exibirNomeServico): self
    {
        $this->exibirNomeServico = $exibirNomeServico;

        return $this;
    }

    public function setExibirNomeUnidade($exibirNomeUnidade): self
    {
        $this->exibirNomeUnidade = $exibirNomeUnidade;

        return $this;
    }

    public function setExibirMensagemServico($exibirMensagemServico): self
    {
        $this->exibirMensagemServico = $exibirMensagemServico;

        return $this;
    }

    public function setExibirData($exibirData): self
    {
        $this->exibirData = $exibirData;

        return $this;
    }

    public function setExibirPrioridade($exibirPrioridade): self
    {
        $this->exibirPrioridade = $exibirPrioridade;
        
        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'cabecalho'             => $this->getCabecalho(),
            'rodape'                => $this->getRodape(),
            'exibirData'            => $this->getExibirData(),
            'exibirPrioridade'      => $this->getExibirPrioridade(),
            'exibirNomeUnidade'     => $this->getExibirNomeUnidade(),
            'exibirNomeServico'     => $this->getExibirNomeServico(),
            'exibirMensagemServico' => $this->getExibirMensagemServico(),
            'exibirId'              => $this->getExibirId(),
        ];
    }
}
