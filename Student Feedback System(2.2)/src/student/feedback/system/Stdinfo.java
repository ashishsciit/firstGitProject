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
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.persistence.Transient;
import javax.swing.table.AbstractTableModel;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author santosh
 */
@Entity
@Table(name = "stdinfo")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Stdinfo.findAll", query = "SELECT s FROM Stdinfo s"),
    @NamedQuery(name = "Stdinfo.findByStdId", query = "SELECT s FROM Stdinfo s WHERE s.stdId = :stdId"),
    @NamedQuery(name = "Stdinfo.findByPassword", query = "SELECT s FROM Stdinfo s WHERE s.password = :password"),
    @NamedQuery(name = "Stdinfo.findByFName", query = "SELECT s FROM Stdinfo s WHERE s.fName = :fName"),
    @NamedQuery(name = "Stdinfo.findByLName", query = "SELECT s FROM Stdinfo s WHERE s.lName = :lName"),
    @NamedQuery(name = "Stdinfo.findByGender", query = "SELECT s FROM Stdinfo s WHERE s.gender = :gender"),
    @NamedQuery(name = "Stdinfo.findByBranch", query = "SELECT s FROM Stdinfo s WHERE s.branch = :branch"),
    @NamedQuery(name = "Stdinfo.findBySemester", query = "SELECT s FROM Stdinfo s WHERE s.semester = :semester")})
public class Stdinfo implements Serializable {

    @Transient
    private PropertyChangeSupport changeSupport = new PropertyChangeSupport(this);

    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "std_id")
    private String stdId;
    @Column(name = "password")
    private String password;
    @Column(name = "f_name")
    private String fName;
    @Column(name = "l_name")
    private String lName;
    @Column(name = "gender")
    private String gender;
    @Column(name = "branch")
    private String branch;
    @Column(name = "semester")
    private Integer semester;

    public Stdinfo() {
    }

    public Stdinfo(String stdId) {
        this.stdId = stdId;
    }

    public String getStdId() {
        return stdId;
    }

    public void setStdId(String stdId) {
        String oldStdId = this.stdId;
        this.stdId = stdId;
        changeSupport.firePropertyChange("stdId", oldStdId, stdId);
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        String oldPassword = this.password;
        this.password = password;
        changeSupport.firePropertyChange("password", oldPassword, password);
    }

    public String getFName() {
        return fName;
    }

    public void setFName(String fName) {
        String oldFName = this.fName;
        this.fName = fName;
        changeSupport.firePropertyChange("FName", oldFName, fName);
    }

    public String getLName() {
        return lName;
    }

    public void setLName(String lName) {
        String oldLName = this.lName;
        this.lName = lName;
        changeSupport.firePropertyChange("LName", oldLName, lName);
    }

    public String getGender() {
        return gender;
    }

    public void setGender(String gender) {
        String oldGender = this.gender;
        this.gender = gender;
        changeSupport.firePropertyChange("gender", oldGender, gender);
    }

    public String getBranch() {
        return branch;
    }

    public void setBranch(String branch) {
        String oldBranch = this.branch;
        this.branch = branch;
        changeSupport.firePropertyChange("branch", oldBranch, branch);
    }

    public Integer getSemester() {
        return semester;
    }

    public void setSemester(Integer semester) {
        Integer oldSemester = this.semester;
        this.semester = semester;
        changeSupport.firePropertyChange("semester", oldSemester, semester);
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (stdId != null ? stdId.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Stdinfo)) {
            return false;
        }
        Stdinfo other = (Stdinfo) object;
        if ((this.stdId == null && other.stdId != null) || (this.stdId != null && !this.stdId.equals(other.stdId))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "student.feedback.system.Stdinfo[ stdId=" + stdId + " ]";
    }

    public void addPropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.addPropertyChangeListener(listener);
    }

    public void removePropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.removePropertyChangeListener(listener);
    }
    
  

}
