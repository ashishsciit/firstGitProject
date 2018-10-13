/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package student.feedback.system;

import java.beans.PropertyChangeListener;
import java.beans.PropertyChangeSupport;
import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Lob;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.persistence.Transient;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author santosh
 */
@Entity
@Table(name = "fd")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Fd.findAll", query = "SELECT f FROM Fd f"),
    @NamedQuery(name = "Fd.findBySrno", query = "SELECT f FROM Fd f WHERE f.srno = :srno")})
public class Fd implements Serializable {

    @Transient
    private PropertyChangeSupport changeSupport = new PropertyChangeSupport(this);

    private static final long serialVersionUID = 1L;
    @Lob
    @Column(name = "S_name")
    private String sname;
    @Lob
    @Column(name = "T_name")
    private String tname;
    @Lob
    @Column(name = "q1")
    private String q1;
    @Lob
    @Column(name = "q2")
    private String q2;
    @Lob
    @Column(name = "q3")
    private String q3;
    @Lob
    @Column(name = "q4")
    private String q4;
    @Lob
    @Column(name = "q5")
    private String q5;
    @Lob
    @Column(name = "q6")
    private String q6;
    @Lob
    @Column(name = "branch")
    private String branch;
    @Lob
    @Column(name = "semester")
    private String semester;
    @Id
    @Basic(optional = false)
    @Column(name = "srno")
    private String srno;

    public Fd() {
    }

    public Fd(String srno) {
        this.srno = srno;
    }

    public String getSname() {
        return sname;
    }

    public void setSname(String sname) {
        String oldSname = this.sname;
        this.sname = sname;
        changeSupport.firePropertyChange("sname", oldSname, sname);
    }

    public String getTname() {
        return tname;
    }

    public void setTname(String tname) {
        String oldTname = this.tname;
        this.tname = tname;
        changeSupport.firePropertyChange("tname", oldTname, tname);
    }

    public String getQ1() {
        return q1;
    }

    public void setQ1(String q1) {
        String oldQ1 = this.q1;
        this.q1 = q1;
        changeSupport.firePropertyChange("Q1", oldQ1, q1);
    }

    public String getQ2() {
        return q2;
    }

    public void setQ2(String q2) {
        String oldQ2 = this.q2;
        this.q2 = q2;
        changeSupport.firePropertyChange("Q2", oldQ2, q2);
    }

    public String getQ3() {
        return q3;
    }

    public void setQ3(String q3) {
        String oldQ3 = this.q3;
        this.q3 = q3;
        changeSupport.firePropertyChange("Q3", oldQ3, q3);
    }

    public String getQ4() {
        return q4;
    }

    public void setQ4(String q4) {
        String oldQ4 = this.q4;
        this.q4 = q4;
        changeSupport.firePropertyChange("Q4", oldQ4, q4);
    }

    public String getQ5() {
        return q5;
    }

    public void setQ5(String q5) {
        String oldQ5 = this.q5;
        this.q5 = q5;
        changeSupport.firePropertyChange("Q5", oldQ5, q5);
    }

    public String getQ6() {
        return q6;
    }

    public void setQ6(String q6) {
        String oldQ6 = this.q6;
        this.q6 = q6;
        changeSupport.firePropertyChange("Q6", oldQ6, q6);
    }

    public String getBranch() {
        return branch;
    }

    public void setBranch(String branch) {
        String oldBranch = this.branch;
        this.branch = branch;
        changeSupport.firePropertyChange("branch", oldBranch, branch);
    }

    public String getSemester() {
        return semester;
    }

    public void setSemester(String semester) {
        String oldSemester = this.semester;
        this.semester = semester;
        changeSupport.firePropertyChange("semester", oldSemester, semester);
    }

    public String getSrno() {
        return srno;
    }

    public void setSrno(String srno) {
        String oldSrno = this.srno;
        this.srno = srno;
        changeSupport.firePropertyChange("srno", oldSrno, srno);
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (srno != null ? srno.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Fd)) {
            return false;
        }
        Fd other = (Fd) object;
        if ((this.srno == null && other.srno != null) || (this.srno != null && !this.srno.equals(other.srno))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "student.feedback.system.Fd[ srno=" + srno + " ]";
    }

    public void addPropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.addPropertyChangeListener(listener);
    }

    public void removePropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.removePropertyChangeListener(listener);
    }
    
}
